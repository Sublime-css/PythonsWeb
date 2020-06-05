<!----------------------------------------------------->
<!--------------------Python's Web--------------------->
<!----------------------------------------------------->

<!--This page displays all pages of content using PHP _GET method, eliminating the need for multiple HTML documents-->

<!--Browser needs to know what (machine) language this document is in:-->
<!DOCTYPE html>
<!--Googlebot and screen readers need to know what (human) language the website is in:-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--To appear at the top of the page, and also for SEO-->
    <title>Python's Web</title>

    <!--For SEO and screen readers-->
    <meta name="description" content="Learn to code Python online!">

    <!--For Mobile users:-->
    <meta name="theme-color" content="#6e3bb0">

    <!--CSS reset, followed by CSS library, followed by site stylesheet (order is important)-->
    <link rel="stylesheet" href="css/reset.css" type="text/css" "media=screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" "media=screen">
</head>

<!--PHP is used to pull data from the database-->
<?php
    echo "<p style=\"color: #707070; position: absolute\">Debug:</p>";
    //Default to the gallery:
    $Page = '5';
    //Try for what page the user wants:
    $Page = $_GET['page'];
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
    <header>
        <!--The header is a navigation bar in this design-->
        <nav>
            <!--There are two levels of navbar -- each level is a list of links-->
            <!--CSS is structured so only the list needs a class -- this prevents destroying other lists on the page-->
            <ul class="navbar">
                <li><a href="index.php?page=1">
                        <h1>Python's Web</h1>
                    </a></li>
                <li><a href="index.php?page=2">Register/Login</a></li>
                <li><a href="index.php?page=3">Share With Class</a></li>
            </ul>
            <ul class="navbar">
                <li><a href="index.php?page=4">Search</a></li>
                <li><a href="index.php?page=5">Coursework</a></li>
                <li><a href="index.php?page=6">Donate</a></li>
                <li><a href="index.php?page=7">News</a></li>
                <li><a href="index.php?page=8">F. A. Q.</a></li>
                <li><a href="index.php?page=9">Reference</a></li>
            </ul>
        </nav>
    </header>

    <!--The main body of the site, where content goes-->
    <div class="body">
        <!--PHP - Here Be Dragons (dynamic content)-->
        <!--Does the page display text, or videos?-->
        <?php if ($row["video1"] == ""){
            ?><div class="<?php echo"dynamic " . $row["size1"]?>">
                <h1><?php echo $row["heading1"];?></h1>
                <p><?php echo $row["text1"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size2"];?>">
                <h1><?php echo $row["heading2"];?></h1>
                <p><?php echo $row["text2"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size3"];?>">
                <h1><?php echo $row["heading3"];?></h1>
                <p><?php echo $row["text3"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size4"];?>">
                <h1><?php echo $row["heading4"];?></h1>
                <p><?php echo $row["text4"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size5"];?>">
                <h1><?php echo $row["heading5"];?></h1>
                <p><?php echo $row["text5"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size6"];?>">
                <h1><?php echo $row["heading6"];?></h1>
                <p><?php echo $row["text6"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size7"];?>">
                <h1><?php echo $row["heading7"];?></h1>
                <p><?php echo $row["text7"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size8"];?>">
                <h1><?php echo $row["heading8"];?></h1>
                <p><?php echo $row["text8"]?></p>
            </div>
        <?php
             } else {
            ?><div class="<?php echo"dynamic " . $row["size1"]?>">
                <h1><?php echo $row["heading1"];?></h1>
                <p><?php echo $row["video1"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size2"];?>">
                <h1><?php echo $row["heading2"];?></h1>
                <p><?php echo $row["video2"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size3"];?>">
                <h1><?php echo $row["heading3"];?></h1>
                <p><?php echo $row["video3"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size4"];?>">
                <h1><?php echo $row["heading4"];?></h1>
                <p><?php echo $row["text4"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size5"];?>">
                <h1><?php echo $row["heading5"];?></h1>
                <p><?php echo $row["video5"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size6"];?>">
                <h1><?php echo $row["heading6"];?></h1>
                <p><?php echo $row["video6"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size7"];?>">
                <h1><?php echo $row["heading7"];?></h1>
                <p><?php echo $row["video7"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size8"];?>">
                <h1><?php echo $row["heading8"];?></h1>
                <p><?php echo $row["video8"]?></p>
            </div><?php
             }?>
        <!--End of Dragon's territory-->
    </div>
    <footer>
        <!--Whatever needs to go here:-->
    </footer>
</body>

</html>
