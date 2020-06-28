<?php
function login($perms){
    //The user might already be logged in using the browsing session:
    if (isset($_SESSION["login"]) and $_SESSION["login"] == $perms){
        return true;
    }
    //Logging in for the first time during the session:
    else{
    include "frontEndLogin.php";
    loginWindow();

    // Create connection
    $conn = new mysqli("localhost", "sec_user", "GreenChair153", "pythonsweb");
        
    // Check connection
    if ($conn->connect_error) {
        die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn->connect_error . "</p>");
    }

    $result = mysqli_query($conn,"SELECT * FROM login WHERE username='" . $_SESSION["username"] . "' and password = '". $_SESSION["password"]."' and perms='" . $perms . "'");
        $count  = mysqli_num_rows($result);
        //If there are no records with the correct username/password/perms combo:
        if($count == 0) {
            echo "<p style=\"color: red; position: absolute; top:1rem\">Access denied. You have incorrect privileges.</p>";
            //Log the user out:
            $_SESSION["login"] = "";
            die("Error: Incorrect credentials, or insufficient permissions.");
        } else {
            echo "<p style=\"color: #63ebb0; position: absolute; top:1rem\">Logged in with elevated privileges.</p>";
            //Add the login to the session to make life easier next time:
            $_SESSION["login"] = $perms;
            //Refresh the page with the new perms to get the restricted page:
            echo("<meta http-equiv='refresh' content='0'>");
        }
    }
}
?>