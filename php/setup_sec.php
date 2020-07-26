<?php
//New setup.php is much smaller due to optimisation:
$conn_sec = new mysqli("localhost", "sec_user", "GreenChair153", "pythonsweb");
if ($conn_sec->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn_sec->connect_error . "</p>");
}?>