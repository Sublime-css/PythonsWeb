<?php 
$sql = "SELECT
        * 
    FROM
        ((SELECT
            * 
        FROM
            media 
        WHERE
            media.title LIKE '%console%' 
            AND media.display = 'video') 
    UNION
    DISTINCT (SELECT
        * 
    FROM
        media 
    WHERE
        media.text LIKE '%console%')
) AS union1";
include "php/setup_insec.php";
$result = $conn_insec->query($sql);
$count  = mysqli_num_rows($result);
$row = $result->fetch_assoc();
print_r($row);
?>