<?php
//Don't call session more than once
require_once ("../session.php");
//Stuff will break if it's not set already
if(! isset($_SESSION["admin_videos"])){
    $_SESSION["admin_videos"] = 0;
}

if(isset($_GET["add_videos"])){
    $_SESSION["admin_videos"]++;
}
//Nobody wants negative videos
if(isset($_GET["remove_videos"]) and $_SESSION["admin_videos"] > 0){
    $_SESSION["admin_videos"]--;
}

if(! isset($_SESSION["admin_texts"])){
    $_SESSION["admin_texts"] = 0;
}

if(isset($_GET["add_texts"])){
    $_SESSION["admin_texts"]++;
}
//Or negative texts for that matter
if(isset($_GET["remove_texts"]) and $_SESSION["admin_texts"] > 0){
    $_SESSION["admin_texts"]--;
}
$_SESSION["admin_defaultTab"] = "new";
//Refresh the page to go back home
?>
<meta http-equiv="refresh" content="0;url=../admin.php">