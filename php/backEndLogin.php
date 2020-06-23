<?php
function login($perms){
    //Obfuscating the login technique can help to keep the website secure in the case of a data breach:
    //The database password is stored in plaintext if we don't obfuscate this:
    eval(base64_decode('JHNlcnZlcm5hbWUgPSAibG9jYWxob3N0IjsgJHVzZXJuYW1lID0gInNlY191c2VyIjsgJHBhc3N3b3JkID0gIkdyZWVuQ2hhaXIxNTMiOyAkZGF0YWJhc2UgPSAicHl0aG9uc3dlYiI7'));

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn->connect_error . "</p>");
    }
    echo "<p style=\"color: #63ebb0; position: absolute; top:1rem\">Connected to database successfully.</p>";

    $result = mysqli_query($conn,"SELECT * FROM login WHERE username='" . $_SESSION["username"] . "' and password = '". $_SESSION["password"]."' and perms='" . $perms . "'");
        $count  = mysqli_num_rows($result);
        if($count == 0) {
            echo "<p style=\"color: red; position: absolute; top:2rem\">Access denied. You have incorrect privileges.</p>";
            die("Error: Incorrect credentials, or insufficient permissions.");
        } else {
            echo "<p style=\"color: #63ebb0; position: absolute; top:2rem\">Logged in with elevated privileges.</p>";
        }
    }
?>