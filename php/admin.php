<!----------------------------------------------------->
<!--------------------Python's Web--------------------->
<!----------------------------------------------------->
<!--
Reworked admin page
New techniques:
--Break it apart into chunks that do discreet things
--use snake case for variable namespaceing
-->

<!--Browser needs to know what (machine) language this document is in:-->
<!DOCTYPE html>
<!--Googlebot and screen readers need to know what (human) language the website is in:-->
<html lang="en">

<head>
    <?php include "head.php";?>
    <!--Additional stylesheet for admin form-->
    <link rel="stylesheet" href="../css/admin.css" type="text/css" "media=screen">
    <!--JS for the admin page-->
    <script type="text/javascript" src="../js/admin.js"></script>
</head>

<body onload="editpage()">
    <?php
        require_once("session.php");
        //Need to log into the database:
        require_once("setup_sec.php");
        include "nav.php";?>
    
        <div class="wrapper" style="">
            <?php
            include "login/backEndLogin.php";
            if(login("admin")){
            ?>
            <button class="tabbutton" onclick="newpage()">New Page:</button>
            <button class="tabbutton" onclick="editpage()">Edit Page:</button>
            <button class="tabbutton" onclick="delpage()">Delete Page:</button>

            <?php
            include "adminCRUD/calcPages.php";
            include "adminCRUD/newPage.php";
            include "adminCRUD/updatePage.php";
            include "adminCRUD/delPage.php";
            //include "adminCRUD/pages.php";
            ?>
            <?php } ?>
        </div>
</body>

</html>