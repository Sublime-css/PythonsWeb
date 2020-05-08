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

        <!--CSS reset, followed by CSS library, followed by site stylesheet (order is important)-->
        <link rel="stylesheet" href="css/reset.css" type="text/css" "media=screen">
        <link rel="stylesheet" href="https://sublime-css.github.io/SublimeCSS/code/css/sublime.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" "media=screen">
    </head>

    <!--PHP is used to pull data from the database-->
    

    <body>
        <header>
            <!--The header is a navigation bar in this design-->
            <nav>
                <!--There are two levels of navbar -- each level is a list of links-->
                <!--CSS is structured so only the list needs a class -- this prevents destroying other lists on the page-->
                <ul class="navbar">
                    <li><a href="index.php?page=1"><h1>Python's Web</h1></a></li>
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
            
            <table>
                <tr>
                  <th>Page Num</th>
                  <th>Title1</th>
                  <th>Title2</th>
                </tr>

                <?php
                    //Need to login to the database:
                    include "setup.php";
                    //Get the data that corrosponds to the current page:
                    $sql = "SELECT * FROM pages";
                    $result = $conn->query($sql);
                    //Check that we got something, or error if we didn't:
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            $pagenum=$row["pagenum"];
                            $heading1=$row["heading1"];
                   ?>     
                <tr>
                    <td><?php echo "$pagenum";?></td>
                    <td><?php echo "$heading1";?></td>
                </tr>
        <?php }
                    } else {
                        //Explain what went wrong:
                        echo "<p style=\"color: red\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent -- pending upload)</p>";
                    }
                    $conn->close();
                    ?>
            </table>
            <!--End of Dragon's territory-->
        </div>
        <footer>
            <!--Whatever needs to go here:-->
        </footer>
    </body>
</html>