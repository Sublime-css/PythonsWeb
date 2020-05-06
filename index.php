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
    <link rel="stylesheet" href="css/style.css" type="text/css" "media=screen">
    
</head>

<?php
include "setup.php";
$sql = "SELECT * FROM pages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
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
                <li><a href="index.html"><h1>Python's Web</h1></a></li>
                <li><a href="index.html">Register/Login</a></li>
                <li><a href="index.html">Share With Class</a></li>
            </ul>    
            
            <ul class="navbar">
                <li><a href="index.html">Search</a></li>
                <li><a href="index.html">Coursework</a></li>
                <li><a href="index.html">Donate</a></li>
                <li><a href="index.html">News</a></li>
                <li><a href="index.html">F. A. Q.</a></li>
                <li><a href="index.html">Reference</a></li>
            </ul>
            
        </nav>

    </header>
    
    <!--The main body of the site, where content goes-->
    <div class="body">
        
        <!--PHP -- Here Be Dragons-->
        <?php echo $row["heading1"]?>
        
    </div>
    
    <footer>

    </footer>
    
</body>

</html>
