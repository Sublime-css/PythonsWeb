<?php
require_once("../session.php");
$_SESSION["login_currentPerms"] = "";
echo("<meta http-equiv='refresh' content='0; http://" . $_SESSION["login_path"] . "'>");
?>