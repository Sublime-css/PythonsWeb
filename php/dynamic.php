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
    $sql = "SELECT id, display FROM pages WHERE pagenum = $Page";
    $result = $conn_insec->query($sql);
    if ($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if ($row["display"] == "video"){
            $sql = "SELECT * FROM videos WHERE pageid = " . $row["id"];
            $result = $conn_insec->query($sql);
            //Check that we got something, or error if we didn't:
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo "<p style=\"color: #63ebb0; position: absolute;top:2rem\">Successfully loaded page " . $Page . ".</p>";
                    ?><div class="<?php echo"dynamic " . $row["size" . $i]?>">
                        <h1><?php echo $row["title"];?></h1>
                        <p><?php echo $row["text"];?></p>
                        <p><a href="../videos/<?php echo $row['link'];?>">Link: </a></p>
                    </div><?php
                }
            }
        }
        elseif ($row["display"] == "text"){
        $sql = "SELECT * FROM texts WHERE pageid = " . $row["id"];
            $result = $conn_insec->query($sql);
            //Check that we got something, or error if we didn't:
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo "<p style=\"color: #63ebb0; position: absolute;top:2rem\">Successfully loaded page " . $Page . ".</p>";
                    ?><div class="<?php echo"dynamic " . $row["size" . $i]?>">
                        <h1><?php echo $row["title"];?></h1>
                        <p><?php echo $row["text"];?></p>
                    </div><?php
                }
            }
        }
    }
$conn_insec->close();
?>