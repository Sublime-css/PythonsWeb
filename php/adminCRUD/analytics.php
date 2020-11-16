<div class="container invis" id="analytics" style="display:none">
    <table width="100%">
        
        <?php
    include"setup_insec.php";
    $result = $conn_insec->query("SELECT *, login.username FROM lessons INNNER JOIN login ON login.userid = lessons.userid");
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["userid"] . "</td><td>" . $row["hits"] . "</td><td>" . $row["first_timestamp"] . "</td><td>" . $row["latest_timestamp"] . "</td></tr>";
    }?>
    </table>
</div>