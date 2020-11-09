<?php
//Start the session once
require_once("../session.php");
//Connect to DB, not as an admin:
require_once("../setup_insec.php");
#securely get the right pepper's location and index:
$sql = "SELECT pepperID FROM login WHERE username='" . $_POST["login_username"] . "'";
$result = $conn_insec->query($sql);
$count  = mysqli_num_rows($result);
$row = $result->fetch_assoc();
$sql = "SELECT url, pepper_index FROM pepper WHERE id=" . $row["pepperID"];
$result = $conn_insec->query($sql);
$count  = mysqli_num_rows($result);
$row = $result->fetch_assoc();
$config = "../../" . $row["url"];
//Set the file to an array, with a line per array item:
$lines = file($config);
//Crypto-pepper is stored on line 31, index 30
$pepper = trim($lines[$row["pepper_index"]]);

if ($pepper ==  ""){
    //This must be the first run of the program, generate a new crypto-secure pepper
    //64 bytes = 512 bits = length of a sha256 hash
    $lines[$row["pepper_index"]] = "     " . bin2hex(random_bytes(64)) . "\n";
    //Replace the config file with the editited version, now containing the pepper:
    file_put_contents($config, implode($lines));
    //go back home, and try again with a new pepper:
    //This has to be done from scratch, incase there is a problem with saving in `config.yaml`.
    //If the pepper changes, all DB password hashes become unuseable.
    echo("<meta http-equiv='refresh' content='100; http://" . $_SESSION["login_path"] . "'>");
    die("This is likely normal, just reload your page. If you keep seeing this, please contact us.");
}
//If the user is trying to login:
if($_POST["loginOrRegister"] == "login"){
    //We need to find the salt first in order to hash the password:
    $sql = "SELECT salt from login WHERE username='" . $_POST["login_username"] . "'";
    $result = $conn_insec->query($sql);
    $count  = mysqli_num_rows($result);
    //If there are no records with the correct username/password/perms combo:
    if($count == 0) {
        //Log the user out:
        $_SESSION["login_currentPerms"] = "";
        //go back from whence we came:
        echo("<meta http-equiv='refresh' content='3; http://" . $_SESSION["login_path"] . "'>");
        //If the redirect fails:
        echo"Error: " . $sql . "<br>" . $conn_insec->error;
        die("<p style=\"color: red; position: absolute; top:1rem\">No account found with that login/password. Have another go?</p>");
    } else {
        $row = $result->fetch_assoc();
        //Check for hashed, salted and peppered password:
        $sql = "SELECT username, password, perms FROM login WHERE username= '" . $_POST["login_username"] . "' and password='" . hash("sha512", $row["salt"] . $_POST["login_password"] . $pepper) . "' and perms='" . $_SESSION["login_recPerms"] . "'";
        #echo("PEPPER:". $pepper . "?pepper");
        $result = $conn_insec->query($sql);
        $count = $result->fetch_assoc();
        if($count == 0) {
            //Log the user out:
            $_SESSION["login_currentPerms"] = "";
            echo("<meta http-equiv='refresh' content='100; http://" . $_SESSION["login_path"] . "'>");
            //If the redirect fails:
            die("<p style=\"color: red; position: absolute; top:1rem\">No account found with that login/password. Have another go?</p>");
        } else {
            //Add the login to the session to make life easier next time:
            $_SESSION["login_currentPerms"] = $_SESSION["login_recPerms"];
            //Send the user back from whence they came! we set `login_path` to the URL the user came from before.
            echo("<meta http-equiv='refresh' content='100; http://" . $_SESSION["login_path"] . "'>");
        }
    }
    $conn_insec->close();
}
else{
    #Can't have multiple users with the same username!
    $sql = "SELECT username FROM login WHERE username = '" . $_POST["login_username"] . "'";
    #check the database for duplicate names:
    $result = $conn_insec->query($sql);
    #If there are more than 0 duplicates
    if (mysqli_num_rows($result) != 0){
        #Go back after the user has read the error:
        echo("<meta http-equiv='refresh' content='3; http://" . $_SESSION["login_path"] . "'>");
        #Explain what happened:
        die("<p style=\"color: red; position: absolute; top:1rem\">Another user has already taken this username.</p>");
    }
    $salt = bin2hex(random_bytes(8));
    $sql = "INSERT INTO login (email, username, password, perms, salt) VALUES ('". $_POST["login_email"] . "', '" . $_POST["login_username"] . "', '"  . hash("sha512", $pepper . $_POST["login_password"] . $salt) . "', 'user' , '$salt')";
    unset($salt);
    //Insert data by SQL:
    //Check that attempt was successfull:
    if ($conn_insec->query($sql) === true) {
        //Disconnect from database:
        $conn_insec->close();
        //Log the user in (users who registered can only even have user perms)
        //It's a good idea to be conservative with the setting of login perms to a variable,
        //to avoid privilage escalation attacks.
        $_SESSION["login_currentPerms"] = "user";
        echo("<meta http-equiv='refresh' content='100; http://" . $_SESSION["login_path"] . "'>");
        //give some feedback:
        echo "<p style=\"color: #63ebb0\"size=\"5rem\">New account created successfully.</p>";
        #die with an exit code of 0:
        die(0);
    }
    //Tell the user that it didn't work:
    else {
        $_SESSION["login_currentPerms"] = "";
        echo("<meta http-equiv='refresh' content='3; http://" . $_SESSION["login_path"] . "'>");
        echo"Error: " . $sql . "<br>" . $conn_insec->error;
        die("<p style=\"color: red; position: absolute; top:1rem\">Login failed, have another go?</p>");
    }
}