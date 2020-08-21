<?php
//We only want to be able to add pages that arn't made already
$sql = "SELECT pagenum FROM videos UNION SELECT pagenum FROM texts";
$result = $conn_sec->query($sql);
$admin_pages = [];
while($num = $result->fetch_assoc()){
    //Put the list of current pages into an array:
    array_push($admin_pages, implode($num));
}
//They will not be in the right order!
asort($admin_pages);
$conn_sec->close();
?>