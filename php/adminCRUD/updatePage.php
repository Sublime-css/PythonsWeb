<?php
    if(! isset($_GET["updatePage_pagenum"])){
        if(count($admin_pages) > 0){
            $_GET["updatePage_pagenum"] = $admin_pages[0];
        } else {
            echo "There are no pages to update!";
            die();
        }
    }
?>
<div class="container invis" id="updatepage" style="display:none">
    <form action="" method="GET">
        <div class="row">
            <div class="col-25">
                <label for="updatePage_pagenum">Page to Update:</label>
            </div>
            <div class="col-75">
                <select name="updatePage_pagenum">
                    <?php 
                        //We only want to be able to add pages that aren't made already, but we already calculated the list:
                        foreach ($admin_pages as $i) {
                            if($i == $_GET["updatePage_pagenum"]){
                            echo "<option selected=\"selected\" value=\"" . $i . "\">" . $i . "</option>\r\n";    
                            } else{
                            echo "<option value=\"" . $i . "\">" . $i . "</option>\r\n";
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="View">
        </div>
    </form>

<!--Make a form preloaded with all the data that constitutes the page using PHP-->
<form action="databaseInsertion.php" method="POST">
    <?php
        $sql="SELECT * FROM pages INNER JOIN videos ON pages.id = videos.pageid WHERE pagenum = " . $_GET["updatePage_pagenum"];
        include "setup_sec.php";
        $result = $conn_sec->query($sql);
        while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/videos.php";
        }
    if($result->num_rows > 0){?>
        <div class="row">
            <input type="submit" value="Update">
        </div>
    <?php } ?>
</form>
<?php
$conn_sec->close();
?>
<form action="" method="POST">
    <?php
        $sql="SELECT * FROM pages INNER JOIN texts ON pages.id = texts.pageid WHERE pagenum = " . $_GET["updatePage_pagenum"];
        include "setup_sec.php";
        $result = $conn_sec->query($sql);
        while($row = $result->fetch_assoc()){
            include "reuseables/updatePage/texts.php";
        }
    if($result->num_rows > 0){?>
        <div class="row">
            <input type="submit" value="Update">
        </div>
    <?php } ?>
</form>
<?php
    //We need to pass the page number to the database insertion script:
    require_once("session.php");
    $_SESSION["updatePage_pagenum"] = $_GET["updatePage_pagenum"];
    $conn_sec->close();
?>

</div>