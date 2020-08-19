<div class="container invis" id="updatepage" style="display:none">

<!--Make a form preloaded with all the data that constitutes the page using PHP-->
<?php include "adminCRUD/add.php";?>
<form action="databaseInsertion.php" method="POST">
    <?php
        $sql="SELECT * FROM videos";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);
        while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/videos.php";
        }
        $sql="SELECT * FROM texts";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);
        while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/texts.php";
        }
    if(isset($_SESSION["admin_videos"]) or isset($_SESSION["admin_texts"])){
            for ($i = 1; $i <= $_SESSION["admin_videos"]; $i++) {
                include("reuseables/newPage/videos.php");?>
                <div class="row">
                    <div class="col-25">
                        <label for="videos_pagenum<?php echo $videos_loop;?>">Page Number</label>
                    </div>
                <div class = "col-75">
                    <select name="videos_pagenum<?php echo $videos_loop;?>">
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
            </div><?php
            }
            for ($i = 1; $i <= $_SESSION["admin_texts"]; $i++) {
                include("reuseables/newPage/texts.php");?>
                <div class="row">
                    <div class="col-25">
                        <label for="texts_pagenum<?php echo $texts_loop;?>">Page Number</label>
                    </div>
                <div class = "col-75">
                    <select name="texts_pagenum<?php echo $texts_loop;?>">
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
            </div><?php
            }}?>
        <select name="insert_type" class="invis">
            <option selected value="update"></option>
        </select>
    <div class="row">
        <input type="submit" value="Update">
    </div>
</form>
<?php
$conn_sec->close();
?>
</div>