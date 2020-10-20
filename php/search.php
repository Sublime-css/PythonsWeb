<?php

include "setup_insec.php";
$sql = "SELECT * FROM videos WHERE text LIKE '%$search%' OR title LIKE '%$search%'";
$result = $conn_insec->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        #Create a content box with the correct CSS class that will open the video in an iframe:
            ?><div class="<?php echo"dynamic " . $row["size"] . " "; if ($row["text"] == ""){echo "notext ";} ?>" onclick="document.getElementById('videoPlayer').style.display = 'block'; document.getElementById('videoPlayer').src = '../videos/<?php echo $row['link'];?>';">
                <h1><?php echo $row["title"];?></h1>
                <p><?php echo $row["text"];?></p>
            </div><?php
    }
}

$sql = "SELECT * FROM texts WHERE text LIKE '%$search%' OR title LIKE '%$search%'";
$result = $conn_insec->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?><div class="<?php echo"dynamic " . $row["size"] . " "; if ($row["text"] == ""){echo "notext ";} ?>" style= "background-image: url(../img/<?php echo $row["image"]?>)">
                    <h1><?php echo $row["title"];?></h1>
                    <p><?php echo $row["text"];?></p>
                </div><?php
    }
}

?>

<iframe id="videoPlayer" src="" style="border: 3px solid #707070; display: none; position: fixed; bottom: 0px; left: 0px"></iframe><?php

$conn_insec->close();
?>