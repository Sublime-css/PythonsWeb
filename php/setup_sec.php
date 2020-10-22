<?php
$config = "http://" . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, (strpos($_SERVER['PHP_SELF'], "/", 1) + 1)) . "config.yaml";
$lines = file($config);
//New setup.php is much smaller due to optimisation:
$conn_sec = new mysqli(trim($lines[19]), trim($lines[21]), trim($lines[23]), trim($lines[25]));
unset($lines);
if ($conn_sec->connect_error) {
    die("<p style=\"color: red; position: absolute; top:1rem\">Connection to database failed -- some content may not display.</p>");
}?>