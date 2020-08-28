<?php
require_once("session.php");
include "../lib/phpqrcode/qrlib.php";
QRcode::png($_SESSION["qr"]);
?>