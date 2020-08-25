<?php

include "setup_insec.php";
$sql = "SELECT * FROM videos WHERE text LIKE '%$search%'";
$result = $conn_insec->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?><div class="<?php echo"dynamic " . $row["size"]?>" onclick="window.location='../videos/<?php echo $row['link'];?>';">
            <h1><?php echo $row["title"];?></h1>
            <p><?php echo $row["text"];?></p>
        </div><?php
    }
}

$sql = "SELECT * FROM texts WHERE text LIKE '%$search%'";
$result = $conn_insec->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?><div class="<?php echo"dynamic " . $row["size"]?>" style= "background-image: url(../img/<?php echo $row["image"]?>)">
            <h1><?php echo $row["title"];?></h1>
            <p><?php echo $row["text"];?></p>
        </div><?php
    }
}

?>