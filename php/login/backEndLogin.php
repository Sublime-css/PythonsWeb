<?php
function login($perms){
    //The user might already be logged in using the browsing session:
    if (isset($_SESSION["login_currentPerms"]) and $_SESSION["login_currentPerms"] == $perms){
        return true;
    }
    //Logging in for the first time during the session:
    else{
    require_once("session.php");
    $_SESSION["login_recPerms"] = $perms;
    $_SESSION["login_path"] = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    require_once("frontEndLogin.php");
    return false;
    }
}
?>