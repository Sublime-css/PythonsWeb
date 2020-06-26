<?php
//if i don't do this then Google in its infinite wisdom autofills the database password to all users :/
eval(base64_decode("JHN0ciA9IkdyZWVuQ2hhaXIxNTMiOw=="));
$conn = new mysqli("localhost", "sec_user", $str, "pythonsweb");

if ($conn->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn->connect_error . "</p>");
}
?>