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

    <!--For Mobile users:-->
    <meta name="theme-color" content="#6e3bb0">

    <!--CSS reset, followed by CSS library, followed by site stylesheet (order is important)-->
    <link rel="stylesheet" href="css/reset.css" type="text/css" "media=screen">
    <link rel="stylesheet" href="https://sublime-css.github.io/SublimeCSS/code/css/sublime.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" "media=screen">
    <!--Additional stylesheet for admin form-->
    <link rel="stylesheet" href="css/form.css" type="text/css" "media=screen">

    <script type="text/javascript" src="js/admin.js"></script>

</head>

<!--PHP is used to pull data from the database-->

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
        <?php
            if (true){//Admin authentication goes here eventually.
                echo "<p style=\"color: #63ebb0; position: absolute; top:2rem\">Logged in with remote admin privileges</p>";
            }
        ?>
        <!--A form for the admin to add new content:-->
        <!--Found at https://www.w3schools.com/howto/howto_css_responsive_form.asp, and-->
        <!--modified exsensively for my use (see write-up)-->
        <!--TODO: make each class (video links, text, heading, etc) toggleable via javascript (menu is too big) *DONE*-->
        <button class="tabbutton" onclick="newpage()">New Page:</button>
        <button class="tabbutton" onclick="editpage()">Edit Page:</button>
        <button class="tabbutton" onclick="delpage()">Delete Page:</button>
        <button class="tabbutton" onclick="pagelist1()">Page Headings</button>
        <button class="tabbutton" onclick="pagelist2()">Page Text</button>
        <button class="tabbutton" onclick="pagelist3()">Page Videos</button>
        <button class="tabbutton" onclick="pagelist4()">Page Sizing</button>

        <div class="container" id="newpage" style="display:none">
            <form action="databaseInsertion.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="pagenum">Page Number</label>
                    </div>
                    <div class="col-75">
                        <select id="pagenum" name="pagenum">
                            <?php
                for ($i = 1; $i <= 10; $i++) {
                echo "<option value=\"" . $i . "\">" . $i . "</option>\r\n";
                }
                ?>
                        </select>
                    </div>
                </div>
                <!--Video links:-->
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "<div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"video" . $i . "\">Video " . $i . "</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" id=\"video" . $i . "\" name=\"video" . $i . "\" placeholder=\"Video No." . $i . "...\">
                    </div>
                </div>\r\n";
                }
                ?>
                <!--End of video links:-->
                <!--Start of heading text:-->
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "<div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"heading" . $i . "\">Heading " . $i . "</label>
                    </div>
                    <div class=\"col-75\">
                        <input type=\"text\" id=\"heading" . $i . "\" name=\"heading" . $i . "\" placeholder=\"Heading for article " . $i . "...\">
                    </div>
                </div>\r\n";
                }
                ?>

                <!--End of heading text:-->
                <!--Start of main text:-->
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "<div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"text" . $i . "\">Article " . $i . "</label>
                    </div>
                    <div class=\"col-75\">
                        <textarea id=\"text" . $i . "\" name=\"text" . $i . "\" placeholder=\"Paragraph " . $i . "\" style=\"height:200px\"></textarea>
                    </div>
                </div>\r\n";
                }
                ?>

                <!--End of main text:-->
                <!--Start of box sizes:-->
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "<div class=\"row\">
                    <div class=\"col-25\">
                        <label for=\"size" . $i . "\">Size of Box " . $i . "</label>
                    </div>
                    <div class=\"col-75\">
                        <select id=\"size" . $i . "\"name=\"size" . $i . "\">
                            <option value=\"small\">Small</option>
                            <option value=\"medium\">Medium</option>
                            <option value=\"large\">Large</option>
                            <option value=\"long\">Long</option>
                            <option value=\"whole\">Whole Page</option>
                            <option value=\"none\">Invisible</option>
                        </select>
                    </div>
                </div>\r\n";
                }
                ?>

                <!--End of box sizes-->
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <!--End of the third-party form -- my code resumes-->

        <script>

        </script>

        <table class="pagelist" id="pagelist1">
            <tr>
                <th>Page Number</th>
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "                <th>Heading " . $i . "</th>\r\n";
                }
                ?>
            </tr>

            <?php
                //Need to login to the database:
                include "setup.php";
                //Get the data that corrosponds to the current page:
                $sql = "SELECT * FROM pages";
                $result = $conn->query($sql);
                //Check that we got something, or error if we didn't:
                if ($result->num_rows > 0) {
                    //Loop through the results:
                    while($row = $result->fetch_assoc()){
            ?>

            <!--Write up the results every time:-->
            <tr>
                <td><?php echo $row["pagenum"];?></td>
                <td><?php echo $row["heading1"];?></td>
                <td><?php echo $row["heading2"];?></td>
                <td><?php echo $row["heading3"];?></td>
                <td><?php echo $row["heading4"];?></td>
                <td><?php echo $row["heading5"];?></td>
                <td><?php echo $row["heading6"];?></td>
                <td><?php echo $row["heading7"];?></td>
                <td><?php echo $row["heading8"];?></td>
            </tr>
            <?php
                    }
                }
                else {
                    //Explain what went wrong:
                    echo "<p style=\"color: red\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent -- pending upload)</p>";
                    }
                    $conn->close();
                    ?>
        </table>
        <table class="pagelist" id="pagelist2">
            <tr>
                <th>Page Number</th>
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "                <th>Paragraph " . $i . "</th>\r\n";
                }
                ?>
            </tr>

            <?php
                //Need to login to the database:
                include "setup.php";
                //Get the data that corrosponds to the current page:
                $sql = "SELECT * FROM pages";
                $result = $conn->query($sql);
                //Check that we got something, or error if we didn't:
                if ($result->num_rows > 0) {
                    //Loop through the results:
                    while($row = $result->fetch_assoc()){
            ?>

            <!--Write up the results every time:-->
            <tr>
                <td><?php echo $row["pagenum"];?></td>
                <td><?php echo $row["text1"];?></td>
                <td><?php echo $row["text2"];?></td>
                <td><?php echo $row["text3"];?></td>
                <td><?php echo $row["text4"];?></td>
                <td><?php echo $row["text5"];?></td>
                <td><?php echo $row["text6"];?></td>
                <td><?php echo $row["text7"];?></td>
                <td><?php echo $row["text8"];?></td>
            </tr>
            <?php
                    }
                }
                else {
                    //Explain what went wrong:
                    echo "<p style=\"color: red\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent -- pending upload)</p>";
                    }
                    $conn->close();
                    ?>
        </table>
        <table class="pagelist" id="pagelist3">
            <tr>
                <th>Page Number</th>
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "                <th> Video " . $i . "</th>\r\n";
                }
                ?>
            </tr>

            <?php
                //Need to login to the database:
                include "setup.php";
                //Get the data that corrosponds to the current page:
                $sql = "SELECT * FROM pages";
                $result = $conn->query($sql);
                //Check that we got something, or error if we didn't:
                if ($result->num_rows > 0) {
                    //Loop through the results:
                    while($row = $result->fetch_assoc()){
                        
            ?>

            <!--Write up the results every time:-->
            <tr>
                <td><?php echo $row["pagenum"];?></td>
                <td><?php echo $row["video1"];?></td>
                <td><?php echo $row["video2"];?></td>
                <td><?php echo $row["video3"];?></td>
                <td><?php echo $row["video4"];?></td>
                <td><?php echo $row["video5"];?></td>
                <td><?php echo $row["video6"];?></td>
                <td><?php echo $row["video7"];?></td>
                <td><?php echo $row["video8"];?></td>
            </tr>
            <?php
                    }
                }
                else {
                    //Explain what went wrong:
                    echo "<p style=\"color: red\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent -- pending upload)</p>";
                    }
                    $conn->close();
                    ?>
        </table>
        <table class="pagelist" id="pagelist4">
            <tr>
                <th>Page Number</th>
                <th>Page Number</th>
                <?php
                for ($i = 1; $i <= 8; $i++) {
                echo "                <th> Size " . $i . "</th>\r\n";
                }
                ?>
            </tr>

            <?php
                //Need to login to the database:
                include "setup.php";
                //Get the data that corrosponds to the current page:
                $sql = "SELECT * FROM pages";
                $result = $conn->query($sql);
                //Check that we got something, or error if we didn't:
                if ($result->num_rows > 0) {
                    //Loop through the results:
                    while($row = $result->fetch_assoc()){
            ?>

            <!--Write up the results every time:-->
            <tr>
                <td><?php echo $row["pagenum"];?></td>
                <td><?php echo $row["size1"];?></td>
                <td><?php echo $row["size2"];?></td>
                <td><?php echo $row["size3"];?></td>
                <td><?php echo $row["size4"];?></td>
                <td><?php echo $row["size5"];?></td>
                <td><?php echo $row["size6"];?></td>
                <td><?php echo $row["size7"];?></td>
                <td><?php echo $row["size8"];?></td>
            </tr>
            <?php
                    }
                }
                else {
                    //Explain what went wrong:
                    echo "<p style=\"color: red\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent -- pending upload)</p>";
                    }
                    $conn->close();
                    ?>
        </table>

        <div class="container" id="updatepage" style="display:none">
            <form action="databaseUpdate.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="updatepagenum">Page to Update:</label>
                    </div>
                    <div class="col-75">
                        <select id="updatepagenum" name="updatepagenum">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="updatefield">Field to Update:</label>
                    </div>
                    <div class="col-75">
                        <select id="updatefield" name="updatefield">
                            <option value="heading1">heading1</option>
                            <option value="heading2">heading2</option>
                            <option value="heading3">heading3</option>
                            <option value="heading4">heading4</option>
                            <option value="heading5">heading5</option>
                            <option value="heading6">heading6</option>
                            <option value="heading7">heading7</option>
                            <option value="heading8">heading8</option>
                            <option value="text1">text1</option>
                            <option value="text2">text2</option>
                            <option value="text3">text3</option>
                            <option value="text4">text4</option>
                            <option value="text5">text5</option>
                            <option value="text6">text6</option>
                            <option value="text7">text7</option>
                            <option value="text8">text8</option>
                            <option value="video1">video1</option>
                            <option value="video2">video2</option>
                            <option value="video3">video3</option>
                            <option value="video4">video4</option>
                            <option value="video5">video5</option>
                            <option value="video6">video6</option>
                            <option value="video7">video7</option>
                            <option value="video8">video8</option>
                            <option value="size1">size1</option>
                            <option value="size2">size2</option>
                            <option value="size3">size3</option>
                            <option value="size4">size4</option>
                            <option value="size5">size5</option>
                            <option value="size6">size6</option>
                            <option value="size7">size7</option>
                            <option value="size8">size8</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="text6">Value:</label>
                    </div>
                    <div class="col-75">
                        <textarea id="updatevalue" name="updatevalue" placeholder="" style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

        <div class="container" id="delpage" style="display:none">
            <form action="databaseDel.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="delpagenum">Page to Delete:</label>
                    </div>
                    <div class="col-75">
                        <select id="delpagenum" name="delpagenum">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

    </div>
    <footer>
        <!--Whatever needs to go here:-->
    </footer>
</body>

</html>
