<?php
$config = "http://" . $_SERVER['HTTP_HOST'] . "/PythonsWeb/config.yaml";
$lines = file($config);
//New setup.php is much smaller due to optimisation:
$conn_insec = new mysqli(trim($lines[7]), trim($lines[9]), trim($lines[11]), trim($lines[13]));
unset($lines);
if ($conn_insec->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection failed: " . $conn_insec->connect_error . "</p>");
}?>
