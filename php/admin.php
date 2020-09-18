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
<?php  require_once("session.php");
if(!isset($_SESSION["admin_defaultTab"])){
    $_SESSION["admin_defaultTab"] = "edit";
}
?>
<html lang="en">

<head>
    <?php include "head.php";?>
    <!--Additional stylesheet for admin form-->
    <link rel="stylesheet" href="../css/admin.css" type="text/css" "media=screen">
    <!--JS for the admin page-->
    <script type="text/javascript" src="../js/admin.js"></script>
</head>
<body onload="loadpage(document.getElementById('<?php echo $_SESSION["admin_defaultTab"]?>'))">
    <?php
        //Need to log into the database:
        require_once("setup_sec.php");
        include "nav.php";?>
    
        <div class="wrapper" style="">
            <?php
            include "login/backEndLogin.php";
            if(login("admin")){
            ?>
            <button class="tabbutton" onclick="loadpage(document.getElementById('<?php echo $_SESSION["admin_defaultTab"]?>'))">New Page:</button>
            <button class="tabbutton" onclick="loadpage(document.getElementById('<?php echo $_SESSION["admin_defaultTab"]?>'))">Edit Page:</button>
            <button class="tabbutton" onclick="loadpage(document.getElementById('<?php echo $_SESSION["admin_defaultTab"]?>'))">Delete Page:</button>
            <button class="tabbutton" onclick="loadpage(document.getElementById('<?php echo $_SESSION["admin_defaultTab"]?>'))">Analytics:</button>

            <?php
            include "adminCRUD/calcPages.php";
            include "adminCRUD/newPage.php";
            include "adminCRUD/updatePage.php";
            include "adminCRUD/delPage.php";
            include "adminCRUD/analytics.php";
            ?>
            <?php } ?>
        </div>
</body>

</html>