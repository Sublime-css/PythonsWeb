<!----------------------------------------------------->
<!--------------------Python's Web--------------------->
<!----------------------------------------------------->

<!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->

<!--Browser needs to know what (machine) language this document is in:-->
<!DOCTYPE html>
<!--Googlebot and screen readers need to know what (human) language the website is in:-->
<html lang="en">

<head>
    <?php include "head.php"; ?>
</head>

<!--PHP is used to pull data from the database-->
<?php
    echo "<p style=\"color: #707070; position: absolute\">Debug:</p>";
    //Default to the gallery:
    $Page = '5';
    //Try for what page the user wants, and dont explode if there isn't one:
    if (empty($_GET) != true){
    $Page = $_GET['page'];}
    //Need to login to the database:
    include "setup.php";
    //Get the data that corrosponds to the current page:
    $sql = "SELECT * FROM pages where pagenum = $Page";
    $result = $conn->query($sql);
    //Check that we got something, or error if we didn't:
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<p style=\"color: #63ebb0; position: absolute;top:2rem\">Successfully loaded page " . $Page . ".</p>";
    } else {
        //Explain what went wrong:
        echo "<p style=\"color: red; position: absolute;top:2rem\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent)</p>";
    }
    $conn->close();
    ?>

<body>
    <?php include "nav.php" ?>
    <!--The main body of the site, where content goes-->
    <div class="body">
        <?php include "dynamic.php"?>
    </div>
    <footer>
        <!--Whatever needs to go here:-->
    </footer>
</body>

</html>