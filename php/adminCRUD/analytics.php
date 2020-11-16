<div class="container invis" id="analytics" style="display:none">
    <table width="100%;">
        <tr><td><em><b>Page Number</b></em></td><td><em><b>Username</b></em></td><td><em><b>Page Hits</bb></em></td><td><em><b>First view</b></em></td><td><em><b>Latest view</b></em></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td><em><b>Page 1</b></em></td><td>Luka</td><td>190</td><td>15-6-1979</td><td>17-11-2020</td></tr>
        <tr><td><em></em></td><td>VernD</td><td>109</td><td>23-3-2012</td><td>15-11-2020</td></tr>
        <tr><td><em></em></td><td>theadmin</td><td>42</td><td>5-8-2007</td><td>11-11-2020</td></tr>
        <hr style="clear: both;">
    </tr>    
        
    <?php
    include"setup_insec.php";
    $last_pagenum = "";
    $result = $conn_insec->query("SELECT pagenum, hits, first_timestamp, latest_timestamp, login.username FROM lessons INNER JOIN login ON login.userid = lessons.userid ORDER BY lessons.pagenum ASC");
    while($row = $result->fetch_assoc()){
        if($row["pagenum"] != $last_pagenum){
            ?> <tr><td>&nbsp;</td></tr><?php
            echo "<tr><td><em><b>Page " . $row["pagenum"] . "</b></em></td><td>" . $row["username"] . "</td><td>" . $row["hits"] . "</td><td>" . $row["first_timestamp"] . "</td><td>" . $row["latest_timestamp"] . "</td></tr>";
            
        }
        else{
            echo "<tr><td><em></em></td><td>" . $row["username"] . "</td><td>" . $row["hits"] . "</td><td>" . $row["first_timestamp"] . "</td><td>" . $row["latest_timestamp"] . "</td></tr>";
        }
        $last_pagenum = $row["pagenum"];
    }?>
    </table>
</div>