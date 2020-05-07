<!----------------------------------------------------->
<!--------------------Python's Web--------------------->
<!----------------------------------------------------->

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
        <!--Additional stylesheet for admin form-->
        <link rel="stylesheet" href="css/form.css" type="text/css" "media=screen">
    </head>

    <!--PHP is used to pull data from the database-->
    <?php
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
    } else {
        //Explain what went wrong (debug only-not in production code):
        echo "<p style=\"color: red\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent -- pending upload)</p>";
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
            <!--A form for the admin to add new content:-->
            <!--Found at https://www.w3schools.com/howto/howto_css_responsive_form.asp, and-->
            <!--modified exsensively for my use (see write-up)-->
            <!--TODO: make each class (video links, text, images) toggleable via javascript (menu is too big)-->
            <div class="container">
                <form action="databaseInsertion.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="pagenum">Page Number</label>
                        </div>
                        <div class="col-75">
                            <select id="pagenum" name="pagenum">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                    </div>
                    <!--Video links:-->
                    <div class="row">
                        <div class="col-25">
                            <label for="video1">Video 1</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video1" name="video1" placeholder="1st Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video2">Video 2</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video2" name="video2" placeholder="2nd Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video3">Video 3</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video3" name="video3" placeholder="3rd Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video4">Video 4</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video4" name="video4" placeholder="4th Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video5">Video 5</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video5" name="video5" placeholder="5th Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video6">Video 6</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video6" name="video6" placeholder="6th Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video7">Video 7</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video7" name="video7" placeholder="7th Video Link..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="video8">Video 8</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="video8" name="video8" placeholder="8th Video Link..">
                        </div>
                    </div>
                    <!--End of video links:-->
                    <!--Start of heading text:-->
                    <div class="row">
                        <div class="col-25">
                            <label for="heading1">Heading 1</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="heading1" name="heading1" placeholder="Heading for article 1...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="heading1">Heading 2</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="heading2" name="heading2" placeholder="Heading for article 2...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="heading2">Heading 3</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="heading3" name="heading3" placeholder="Heading for article 3...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="heading4">Heading 4</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="heading4" name="heading4" placeholder="Heading for article 4...">
                        </div>
                    </div>
                    <!--End of heading text:-->
                    <!--Start of main text:-->
                    <div class="row">
                        <div class="col-25">
                            <label for="text1">Article 1</label>
                        </div>
                        <div class="col-75">
                            <textarea id="text1" name="text1" placeholder="Paragraph 1" style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="text2">Article 2</label>
                        </div>
                        <div class="col-75">
                            <textarea id="text2" name="text2" placeholder="Paragraph 2" style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="text3">Article 3</label>
                        </div>
                        <div class="col-75">
                            <textarea id="text3" name="text3" placeholder="Paragraph 3" style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="text4">Article 4</label>
                        </div>
                        <div class="col-75">
                            <textarea id="text4" name="text4" placeholder="Paragraph 4" style="height:200px"></textarea>
                        </div>
                    </div>
                    <!--End of main text:-->
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <!--End of the third-party form -- my code resumes-->
            <!--End of Dragon's territory-->
        </div>
        <footer>
            <!--Whatever needs to go here:-->
        </footer>
    </body>
</html>