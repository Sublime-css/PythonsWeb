<!--Dynamic content for the website:-->
<!--Video embeds are not implemented so the video links just display like the text for now-->

<?php
    echo "<p style=\"color: #707070; position: absolute\">Debug:</p>";
    //Default to the gallery:
    $Page = '5';
    //Try for what page the user wants, and dont explode if there isn't one:
    //Also make sure that the GET is 0 or 1 character in length, because otherwise anyone can write SQL in the URL bar which will be arbitrarilly executed.
    //Before this was patched, adding "; DROP * FROM pages" to the URL would have deleted the website's database. This is a major security vunerability.
    if (empty($_GET) != true and strlen($_GET["page"]) <= 1){
        $Page = $_GET['page'];
    }
    //Need to login to the database -- insecure because all we need to do is read data:
    require_once("setup_insec.php");
    //Get the data that corrosponds to the current page:
    $sql = "SELECT * FROM pages INNER JOIN videos ON pages.id = videos.id INNER JOIN headings ON pages.id = headings.id INNER JOIN texts ON pages.id = texts.id INNER JOIN sizes ON pages.id = sizes.id WHERE pagenum = $Page";
    $result = $conn_insec->query($sql);
    //Check that we got something, or error if we didn't:
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<p style=\"color: #63ebb0; position: absolute;top:2rem\">Successfully loaded page " . $Page . ".</p>";
    } else {
        //Explain what went wrong:
        echo "<p style=\"color: red; position: absolute;top:2rem\">ERROR: Database error -- Tried to load page " . $Page . " (Content nonexistent) ". $conn_insec->error . "</p>";
    }
    $conn_insec->close();

    if ($row["display"] == "text"){
        for ($i = 1; $i <= 8; $i++) {
            ?><div class="<?php echo"dynamic " . $row["size" . $i]?>">
                <h1><?php echo $row["heading" . $i];?></h1>
                <p><?php echo $row["text" . $i];?></p>
            </div>
    <?php } } else if ($row["display"] == "video") {
        for ($i = 1; $i <= 8; $i++) {?>
            <div class="<?php echo"dynamic " . $row["size" . $i]?>">
                <h1><?php echo $row["heading" . $i];?></h1>
                <p><?php echo $row["video" . $i];?></p>
            </div>
        <?php } } ?>