<!--Dynamic content for the website:-->
<!--Video embeds are not implemented so the video links just display like the text for now-->

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


<?php if (empty($row["text1"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size1"]?>">
        <h1><?php echo $row["heading1"];?></h1>
        <p><?php echo $row["text1"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size1"]?>">
                <h1><?php echo $row["heading1"];?></h1>
                <p><?php echo $row["video1"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text2"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size2"]?>">
        <h1><?php echo $row["heading2"];?></h1>
        <p><?php echo $row["text2"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size2"]?>">
                <h1><?php echo $row["heading2"];?></h1>
                <p><?php echo $row["video2"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text3"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size3"]?>">
        <h1><?php echo $row["heading3"];?></h1>
        <p><?php echo $row["text3"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size3"]?>">
                <h1><?php echo $row["heading3"];?></h1>
                <p><?php echo $row["video3"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text4"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size4"]?>">
        <h1><?php echo $row["heading4"];?></h1>
        <p><?php echo $row["text4"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size4"]?>">
                <h1><?php echo $row["heading4"];?></h1>
                <p><?php echo $row["video4"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text5"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size5"]?>">
        <h1><?php echo $row["heading5"];?></h1>
        <p><?php echo $row["text5"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size1"]?>">
                <h1><?php echo $row["heading5"];?></h1>
                <p><?php echo $row["video5"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text6"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size6"]?>">
        <h1><?php echo $row["heading6"];?></h1>
        <p><?php echo $row["text1"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size6"]?>">
                <h1><?php echo $row["heading6"];?></h1>
                <p><?php echo $row["video6"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text7"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size7"]?>">
        <h1><?php echo $row["heading7"];?></h1>
        <p><?php echo $row["text7"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size7"]?>">
                <h1><?php echo $row["heading7"];?></h1>
                <p><?php echo $row["video7"];?></p>
        </div>
        <?php } ?>

<?php if (empty($row["text8"]) == false){
    ?><div class="<?php echo"dynamic " . $row["size8"]?>">
        <h1><?php echo $row["heading8"];?></h1>
        <p><?php echo $row["text8"];?></p>
    </div>
    <?php } else { ?>
        <div class="<?php echo"dynamic " . $row["size8"]?>">
                <h1><?php echo $row["heading8"];?></h1>
                <p><?php echo $row["video8"];?></p>
        </div>
        <?php } ?>