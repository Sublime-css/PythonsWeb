<div class="container invis" id="updatepage" style="display:none">

<!--Make a form preloaded with all the data that constitutes the page using PHP-->
    <?php
        $sql="SELECT * FROM videos";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);?>
        <div class="col-20">
            <label>Title</label>
        </div>
        <div class="col-20">
            <label>Link</label>
        </div>
        <div class="col-20">
            <label>Description</label>
        </div>
        <div class="col-20">
            <label>Size</label>
        </div>
        <div class="col-20">
            <label>Page Number</label>
        </div>
    
        <?php while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/videos.php";
        }
        $sql="SELECT * FROM texts";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);?>
        <div class="row">
            <div class="col-25">
                <label>Title</label>
            </div>
            <div class="col-25">
                <label>Content</label>
            </div>
            <div class="col-25">
                <label>Size</label>
            </div>
            <div class="col-25">
                <label>Page Number</label>
            </div>
        </div>
        <?php while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/texts.php";
        }?>
<?php
$conn_sec->close();
?>
</div>