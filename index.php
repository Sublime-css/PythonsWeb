<!--Browser needs to know what (machine) language the website is in:-->
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

    <!--CSS reset, followed by CSS library, followed by site stylesheet (order is important)-->
    <link rel="stylesheet" href="css/reset.css" type="text/css" "media=screen">
    <link rel="stylesheet" href="https://sublime-css.github.io/SublimeCSS/code/css/sublime.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" "media=screen">
</head>

<?php
include "setup.php";
$sql = "SELECT * FROM pages where pagenum = '3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "ERROR: Nothing found";
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
                <li><a href="index.php"><h1>Python's Web</h1></a></li>
                <li><a href="index.php">Register/Login</a></li>
                <li><a href="index.php">Share With Class</a></li>
            </ul>
            <ul class="navbar">
                <li><a href="index.php">Search</a></li>
                <li><a href="index.php">Coursework</a></li>
                <li><a href="index.php">Donate</a></li>
                <li><a href="index.php">News</a></li>
                <li><a href="index.php">F. A. Q.</a></li>
                <li><a href="index.php">Reference</a></li>
            </ul>
        </nav>
    </header>
    
    <!--The main body of the site, where content goes-->
    <div class="body">
        <!--PHP - Here Be Dragons-->
        <?php echo $row["heading1"]?>
        <?php echo $row["text1"]?>
        <!--End of Dragon's territory-->
    </div>
    <footer>
        <!--Whatever needs to go here:-->
    </footer>
</body>
</html>