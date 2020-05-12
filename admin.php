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
        <!--A form for the admin to add new content:-->
        <!--Found at https://www.w3schools.com/howto/howto_css_responsive_form.asp, and-->
        <!--modified exsensively for my use (see write-up)-->
        <!--TODO: make each class (video links, text, heading, etc) toggleable via javascript (menu is too big)-->
        <button onclick="newpage()">New Page:</button>
        <button onclick="editpage()">Edit Page:</button>
        <button onclick="pagelist1()">Page List (Headings)</button>
        <button onclick="pagelist2()">Page List (Text)</button>
        <button onclick="pagelist3()">Page List (Videos)</button>
        <button onclick="pagelist4()">Page List (Sizing)</button>
        
        <div class="container" id="newPage" style="display:none">
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
                        <label for="heading2">Heading 2</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="heading2" name="heading2" placeholder="Heading for article 2...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="heading3">Heading 3</label>
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
                <div class="row">
                    <div class="col-25">
                        <label for="heading5">Heading 5</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="heading5" name="heading5" placeholder="Heading for article 5...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="heading6">Heading 6</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="heading6" name="heading6" placeholder="Heading for article 6...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="heading7">Heading 7</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="heading7" name="heading7" placeholder="Heading for article 7...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="heading8">Heading 8</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="heading8" name="heading8" placeholder="Heading for article 8...">
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
                <div class="row">
                    <div class="col-25">
                        <label for="text5">Article 5</label>
                    </div>
                    <div class="col-75">
                        <textarea id="text5" name="text5" placeholder="Paragraph 5" style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="text6">Article 6</label>
                    </div>
                    <div class="col-75">
                        <textarea id="text6" name="text6" placeholder="Paragraph 6" style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="text3">Article 7</label>
                    </div>
                    <div class="col-75">
                        <textarea id="text7" name="text7" placeholder="Paragraph 7" style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="text8">Article 8</label>
                    </div>
                    <div class="col-75">
                        <textarea id="text8" name="text8" placeholder="Paragraph 8" style="height:200px"></textarea>
                    </div>
                </div>
                <!--End of main text:-->
                <!--Start of box sizes:-->
                <div class="row">
                    <div class="col-25">
                        <label for="size1">Size of Box 1</label>
                    </div>
                    <div class="col-75">
                        <select id="size1" name="size1">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size2">Size of Box 2</label>
                    </div>
                    <div class="col-75">
                        <select id="size2" name="size2">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size3">Size of Box 3</label>
                    </div>
                    <div class="col-75">
                        <select id="size3" name="size3">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size4">Size of Box 4</label>
                    </div>
                    <div class="col-75">
                        <select id="size4" name="size4">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size5">Size of Box 5</label>
                    </div>
                    <div class="col-75">
                        <select id="size5" name="size5">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size6">Size of Box 6</label>
                    </div>
                    <div class="col-75">
                        <select id="size6" name="size6">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size7">Size of Box 7</label>
                    </div>
                    <div class="col-75">
                        <select id="size7" name="size7">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="size8">Size of Box 8</label>
                    </div>
                    <div class="col-75">
                        <select id="size8" name="size8">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="long">Long</option>
                            <option value="whole">Whole Page</option>
                            <option value="none">Invisible</option>
                        </select>
                    </div>
                </div>

                <!--End of box sizes-->
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <!--End of the third-party form -- my code resumes-->
        
        <script>
            function editpage() {
              var x = document.getElementById("updatepage");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            function newpage() {
              var x = document.getElementById("newPage");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            function pagelist1() {
              var x = document.getElementById("pagelist1");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            function pagelist2() {
              var x = document.getElementById("pagelist2");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            function pagelist3() {
              var x = document.getElementById("pagelist3");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
            function pagelist4() {
              var x = document.getElementById("pagelist4");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
        </script>
        
        <table class="pagelist" id="pagelist1">
            <tr>
                <th>Page Number</th>
                <th>Heading 1</th>
                <th>Heading 2</th>
                <th>Heading 3</th>
                <th>Heading 4</th>
                <th>Heading 5</th>
                <th>Heading 6</th>
                <th>Heading 7</th>
                <th>Heading 8</th>
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
                        $pagenum=$row["pagenum"];
                        $heading1=$row["heading1"];
            ?>
            
            <!--Write up the results every time:-->
            <tr>
                <td><?php echo "$pagenum";?></td>
                <td><?php echo "$heading1";?></td>
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
                <th>Paragraph 1</th>
                <th>Paragraph 2</th>
                <th>Paragraph 3</th>
                <th>Paragraph 4</th>
                <th>Paragraph 5</th>
                <th>Paragraph 6</th>
                <th>Paragraph 7</th>
                <th>Paragraph 8</th>
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
                        $pagenum=$row["pagenum"];
                        $heading1=$row["heading1"];
            ?>
            
            <!--Write up the results every time:-->
            <tr>
                <td><?php echo "$pagenum";?></td>
                <td><?php echo "$heading1";?></td>
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
                <th>Video 1</th>
                <th>Video 2</th>
                <th>Video 3</th>
                <th>Video 4</th>
                <th>Video 5</th>
                <th>Video 6</th>
                <th>Video 7</th>
                <th>Video 8</th>
                
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
                        $pagenum=$row["pagenum"];
                        $heading1=$row["heading1"];
            ?>
            
            <!--Write up the results every time:-->
            <tr>
                <td><?php echo "$pagenum";?></td>
                <td><?php echo "$heading1";?></td>
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
                <th>Size 1</th>
                <th>Size 2</th>
                <th>Size 3</th>
                <th>Size 4</th>
                <th>Size 5</th>
                <th>Size 6</th>
                <th>Size 7</th>
                <th>Size 8</th>
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
                        $pagenum=$row["pagenum"];
                        $heading1=$row["heading1"];
            ?>
            
            <!--Write up the results every time:-->
            <tr>
                <td><?php echo "$pagenum";?></td>
                <td><?php echo "$heading1";?></td>
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
        
    </div>
    <footer>
        <!--Whatever needs to go here:-->
    </footer>
</body>

</html>