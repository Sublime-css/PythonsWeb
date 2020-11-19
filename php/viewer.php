<!DOCTYPE html>
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);?>
<!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->
<html lang="en">

<head>
    <!--Get the modular page header-->
    <?php include "head.php";?>
</head>
    
<?php
//Need to login to the database -- insecure because all we need to do is read data:
require_once("setup_insec.php");
$mediaid = $_GET["id"];
#update analytics in `lessons` table:
if(isset($_SESSION["login_currentPerms"]) and $_SESSION["login_currentPerms"] != ""){
    $sql = "SELECT userid from login WHERE username = '" . $_SESSION["login_username"] . "'";
    $result = $conn_insec->query($sql);
    $row = $result->fetch_assoc();
    $userid = $row["userid"];

    $sql = "SELECT hits FROM `lessons` WHERE userid = '$userid' AND mediaid = '$mediaid'";
    $result = $conn_insec->query($sql);
    $row = $result->fetch_assoc();
    $hits = $row["hits"] + 1;

    if($result->num_rows > 0){
        date_default_timezone_set("GMT+12");
        $sql = "UPDATE lessons set hits = '$hits', latest_timestamp = '" . date("Y-m-d") . "' WHERE userid = '$userid' AND mediaid = '$mediaid'";
    } else{
        $sql = "INSERT INTO lessons (userid, hits, mediaid) VALUES ('$userid', '1', '$mediaid')";
    }
    $result = $conn_insec->query($sql);
}
?>
    
<body style="position: relative">
    <!--Get the modular navigation bar-->
    <?php include "nav.php";?>
    <!--get the debug script-->
    <?php include "debug.php";?>
    <div class="wrapper" style="opacity: 1">
        <div class="dynamic whole">
            <iframe src="https://www.youtube.com/embed/<?php echo $_GET["v"] ?>?rel=0&fs=1&autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen width="99%" height="98%" style="margin: 0.5%"></iframe>
        </div>
        <footer>
            <p><?php
            $config = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "/../../config.yaml";
            $lines = file($config);
            echo trim($lines[35]);
            unset($lines);
            ?></p>
        </footer>
    </div>
    <?php
        $_SESSION["qr"] = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"] . "?page=" . $Page;
        if (isset($search) and $Page == "4")
        {
            $_SESSION["qr"] = $_SESSION["qr"] . "&search=" . $search;
        }
        ?>
    <img src="qrgen.php" id="shareWithClass" style="display: none;">
</body>

</html>
