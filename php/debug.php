<?php
$config = "http://" . $_SERVER['HTTP_HOST'] . "/PythonsWeb/config.yaml";
$lines = file($config);
$debug = trim($lines[91]);
unset($lines);
if(strtoupper($debug) == "TRUE"){
    echo "<p style=\"color: red; position: absolute; top:0rem; z-index: 1; background-color: #0009; line-height: 1rem\">DEBUGGING START (enabled in config.yaml) NOT FOR PRODUCTION</p>";
    
    if(isset($_SESSION["login_currentPerms"]) and $_SESSION["login_currentPerms"]){
    echo "<p style=\"color: red; position: absolute; top:2rem; z-index: 1; background-color: #0009; line-height: 1rem\">Permissions: \"" . $_SESSION["login_currentPerms"] . "\"</p>";
    } else {echo "<p style=\"color: red; position: absolute; top:2rem; z-index: 1; background-color: #0009; line-height: 1rem\">Permissions: not signed in</p>";}
    
    echo "<p style=\"color: red; position: absolute; top:4rem; z-index: 1; background-color: #0009; line-height: 1rem\">\$_GET: \"";
    print_r($_GET);
    echo "\"</p>";
    
    echo "<p style=\"color: red; position: absolute; top:6rem; z-index: 1; background-color: #0009; line-height: 1rem\">\$_POST: \"";
    print_r($_POST);
    echo "\"</p>";
    
    echo "<p style=\"color: red; position: absolute; top:8rem; z-index: 1; background-color: #0009; line-height: 1rem\">\$_SESSION: \"";
    print_r($_SESSION);
    echo "\"</p>";
    
    echo "<p style=\"color: red; position: absolute; top:10rem; z-index: 1; background-color: #0009; line-height: 1rem\">UNIX TIMESTAMP (microseconds since epoch): " . microtime() . "</p>";
    
    echo "<p style=\"color: red; position: absolute; top:12rem; z-index: 1; background-color: #0009; line-height: 1rem\">HTTP HOST: " . $_SERVER["HTTP_HOST"] . "</p>";
    
    echo "<p style=\"color: red; position: absolute; top:14rem; z-index: 1; background-color: #0009; line-height: 1rem\">PHP SELF: " . $_SERVER["PHP_SELF"] . "</p>";
    
    echo "<p style=\"color: red; position: absolute; top:16rem; z-index: 1; background-color: #0009; line-height: 1rem\">DEBUGGING EXIT (0)</p>";
    
}