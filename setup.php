<?php
$servername = "localhost";
$username = "sec_user";
$password = "GreenChair153";
$database = "pythonsweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("<p style=\"color: red\">Connection failed: </p>" . $conn->connect_error);
}
echo "<p style=\"color: #63ebb0\">Connected to database successfully -- PHP Flux Capacitors are GO!!!</p>";
?>