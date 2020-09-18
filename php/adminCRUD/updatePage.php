<div class="container invis" id="updatepage" style="display:none">

    <!--Make a form preloaded with all the data that constitutes the page using PHP-->
    <?php
        $sql="SELECT * FROM videos";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);
        while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/videos.php";
        }
        $sql="SELECT * FROM texts";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);?>

    <?php while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/texts.php";
        }?>
    <?php
$conn_sec->close();
?>
</div>
