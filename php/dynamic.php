<?php
    //Dynamic content for the website:
    //Default to the gallery:
    $Page = '5';
    //Try for what page the user wants, and dont explode if there isn't one:
    //Also make sure that the GET is 0 or 1 character in length, because otherwise anyone can write SQL in the URL bar which will be arbitrarilly executed.
    //Before this was patched, adding "; DROP * FROM pages" to the URL would have deleted the website's database. This is a major security vunerability.
    if(isset($_GET["page"])){
        if(strlen($_GET["page"]) <= 1){
            $Page = $_GET['page'];
        }
    }
    //Need to login to the database -- insecure because all we need to do is read data:
    require_once("setup_insec.php");
    $sql = "SELECT * FROM analytics WHERE PAGENUM = $Page";
    $result = $conn_insec->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
    }
    $sql = "UPDATE analytics SET hits = '" . ($row["hits"] + 1) . "' WHERE id = '" . $row["id"] . "'";
    $result = $conn_insec->query($sql);
    //Get the data that corrosponds to the current page:
        $sql = "SELECT * FROM videos WHERE pagenum = $Page";
        $result = $conn_insec->query($sql);
        //Check that we got something, or error if we didn't:
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                ?><div class="<?php echo"dynamic " . $row["size"]?>" onclick="document.getElementById('videoPlayer').style.display = 'block'; document.getElementById('videoPlayer').src = '../videos/<?php echo $row['link'];?>';">
                    <h1><?php echo $row["title"];?></h1>
                    <p><?php echo $row["text"];?></p>
                </div><?php
            }
            ?><iframe id="videoPlayer" src="" style="border: 3px solid #707070; display: none; position: fixed; bottom: 0px; left: 0px"></iframe><?php
        }
        $sql = "SELECT * FROM texts WHERE pagenum = $Page";
        $result = $conn_insec->query($sql);
        //Check that we got something, or error if we didn't:
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                ?><div class="<?php echo"dynamic " . $row["size"]?>" style= "background-image: url(../img/<?php echo $row["image"]?>)">
                    <h1><?php echo $row["title"];?></h1>
                    <p><?php echo $row["text"];?></p>
                </div><?php
            }
        }
$conn_insec->close();
?>