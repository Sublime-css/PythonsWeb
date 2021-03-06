<!DOCTYPE html>
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);?>
<!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->
<html lang="en">

<head>
    <!--Get the modular page header-->
    <?php include "head.php";?>
</head>

<body style="position: relative">
    <!--Get the modular navigation bar-->
    <?php include "nav.php";?>
    <!--get the debug script-->
    <?php include "debug.php";?>
    <div class="wrapper">
        <?php include "dynamic.php"; //Get the modular content display system
                //Some pages are special:
                //Page 2 is the login page, display the login form there
                if ($Page == "2"){
                    //Get the admin page with PHP because this isn't the dcocument's head
                    echo "\n<link rel=\"stylesheet\" href=\"../css/admin.css\" type=\"text/css\" \"media=screen\">\n";
                    //Get this if its not used already
                    require_once("setup_sec.php");
                    //Prepare to login
                    include "login/backEndLogin.php";
                    //Attempt login with user perms:
                    if(login("user")){
                        require_once("session.php");
                        $_SESSION["login_path"] = $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?page=" . $Page;
                        echo "<div class=\"loginWindow\" id=\"loginNotice\"><h1 style=\"color: #63ebb0\">You're already logged in, thanks to the wonder of cookies!<br>Logged in as " . $_SESSION["login_currentPerms"] . " <em>" . $_SESSION["login_username"] . "</em></h1><a href=\"login/signOut.php\" id=\"signOut\">Sign Out</a></div>";
                    }
                }
                
                if($Page == "4"){
                    include "search.php";
                }
                ?>
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
    <div id="google_translate_element"></div>
</body>

</html>
