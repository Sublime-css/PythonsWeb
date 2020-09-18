<!DOCTYPE html>
<!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->
<html lang="en">

<head>
    <?php include "head.php";?>
    <!--Get the modular page header-->
</head>

<body style="position: relative">
    <?php include "nav.php";?>
    <!--Get the modular navigation bar-->
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
                        echo "<div class=\"loginWindow\" id=\"loginNotice\"><h1 style=\"color: #63ebb0\">You're already logged in!</h1><a href=\"login/signOut.php\" id=\"signOut\">Sign Out</a></div>";
                    }
                }
                
                if($Page == "4"){
                    include "search.php";
                }
                ?>
        <footer>
            <p><?php
                $config = "http://" . $_SERVER['HTTP_HOST'] . "/PythonsWeb/config.yaml";
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
