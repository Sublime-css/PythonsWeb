<!--NEWPAGE.PHP-->
<div class="container invis" id="newpage" style="display:none">
<?php include "adminCRUD/add.php";?>
    <form action="databaseInsertion.php" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="pagenum">Page Number</label>
            </div>
            <div class="col-75">
                <select id="pagenum" name="pagenum">
                    <?php
                        foreach ($admin_inverse as $i) {
                            echo "<option value=\"" . $i . "\">" . $i . "</option>\r\n";
                        }
                    ?>
                </select>
            </div>
        </div>
        <?php
        if(isset($_SESSION["admin_videos"]) or isset($_SESSION["admin_texts"])){
            for ($i = 1; $i <= $_SESSION["admin_videos"]; $i++) {
                include("reuseables/newPage/videos.php");
            }?>
        <?php
            for ($i = 1; $i <= $_SESSION["admin_texts"]; $i++) {
                include("reuseables/newPage/texts.php");
            }?>
        <select name="insert_type" class = "invis">
            <option selected value="new"></option>
        </select>
        <div class="row">
            <input type="submit" value="Create">
        </div>
        <?php } ?>
    </form>
</div>