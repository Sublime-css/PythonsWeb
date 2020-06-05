<?php
$servername = "localhost";
$username = "sec_user";
$password = "GreenChair153";
$database = "pythonsweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn->connect_error . "</p>");
}
echo "<p style=\"color: #63ebb0; position: absolute; top:1rem\">Connected to database successfully.</p>";
?>