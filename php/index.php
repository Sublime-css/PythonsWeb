<!DOCTYPE html><!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->
<html lang="en">
    <head>
        <?php include "head.php";?><!--Get the modular page header-->
    </head>
    <body>
        
        <?php include "nav.php";?><!--Get the modular navigation bar-->
        <div class="body">
            <?php include "dynamic.php"; //Get the modular content display system
            //Some pages are special:
            //Page 2 is the login page, display the login form there
            if ($Page == "2"){
                ?><style><?php
                include "../css/admin.css";?>
                </style><?php
                require_once("setup.php");
                include "backEndLogin.php";
                login("user");
                } ?>
        </div>
    </body>
</html>