<div class="container invis" id="updatepage" style="display:none">

    <?php
        #Make a form preloaded with all the data that constitutes the page using PHP
        $sql="SELECT * FROM media";
        include "setup_sec.php";
        $result = $conn_sec->query($sql);
        print_r($result);
        while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/media.php";
        }
$conn_sec->close();
?>
</div>
