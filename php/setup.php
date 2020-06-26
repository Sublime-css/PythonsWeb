<?php
$conn = new mysqli("localhost", "sec_user", "GreenChair153", "pythonsweb");

if ($conn->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn->connect_error . "</p>");
}
echo "<p style=\"color: #63ebb0; position: absolute; top:1rem\">Connected to database successfully.</p>";
?>