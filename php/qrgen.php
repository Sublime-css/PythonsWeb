<?php
require_once("session.php");
include "../lib/phpqrcode/phpqrcode.php";
QRcode::png($_SESSION["qr"]);
?>