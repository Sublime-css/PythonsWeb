<?php
include "../lib/phpqrcode/qrlib.php";
$qr = $_GET["qr"];
if(isset($_GET["page"])){
    $qr = $qr . "?page=" . $_GET["page"];
}
if(isset($_GET["search"])){
    $qr = $qr . "&search=" . $_GET["search"];
}
QRcode::png("http://$qr");
?>