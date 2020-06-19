<!DOCTYPE html><!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->
<html lang="en">
    <head>
        <?php include "head.php";?><!--Get the modular page header-->
    </head>
    <body>
        <?php include "nav.php";?><!--Get the modular navigation bar-->
        <div class="body">
            <?php include "dynamic.php";?><!--Get the modular content display system-->
        </div>
    </body>
</html>