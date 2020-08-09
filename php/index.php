<!DOCTYPE html><!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->
<html lang="en">
    <head>
        <?php include "head.php";?><!--Get the modular page header-->
    </head>
    <body>
        
        <div class="wrapper" style="width: 80vw">
        <?php include "nav.php";?><!--Get the modular navigation bar-->
        <div class="body">
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
                login("user");
                } ?>
        </div>
        </div>
    </body>
</html>