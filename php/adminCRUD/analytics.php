<div class="container invis" id="analytics" style="display:none">
    <table width="100%;">
    </tr>    
        
    <?php
    include"setup_insec.php";
    $last_pagenum = "";
    $result = $conn_insec->query("SELECT mediaid, hits, first_timestamp, latest_timestamp, login.username, media.title FROM lessons INNER JOIN login ON login.userid = lessons.userid INNER JOIN media ON lessons.mediaid = media.id ORDER BY lessons.mediaid ASC");
    while($row = $result->fetch_assoc()){
        if($row["mediaid"] != $last_pagenum){
            ?> <tr><td>&nbsp;</td></tr><?php
            echo "<tr><td><em><b>" . $row["title"] . "</b></em></td><td>" . $row["username"] . "</td><td>" . $row["hits"] . "</td><td>" . $row["first_timestamp"] . "</td><td>" . $row["latest_timestamp"] . "</td></tr>";
            
        }
        else{
            echo "<tr><td><em></em></td><td>" . $row["username"] . "</td><td>" . $row["hits"] . "</td><td>" . $row["first_timestamp"] . "</td><td>" . $row["latest_timestamp"] . "</td></tr>";
        }
        $last_pagenum = $row["mediaid"];
    }?>
    </table>
</div>