<?php
//New setup.php is much smaller due to optimisation:
$conn = new mysqli("localhost", "sec_user", "GreenChair153", "pythonsweb");
if ($conn->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn->connect_error . "</p>");
}?>