<?php
//We only want to be able to add pages that arn't made already
$sql = "SELECT pagenum FROM videos UNION SELECT pagenum FROM texts";
$result = $conn_sec->query($sql);
$admin_pages = [];
while($num = $result->fetch_assoc()){
    //Put the list of current pages into an array:
    array_push($admin_pages, implode($num));
}
//there will be many values with the same page number! additionally there is no gaurantee they are in the right order:
asort($admin_pages);
//get only the page numbers that have not yet been created:
$admin_inverse = array_diff([1,2,3,4,5,6,7,8,9,10], $admin_pages);
$conn_sec->close();
unset($sql);
unset($result);
?>