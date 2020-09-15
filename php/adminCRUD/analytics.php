<div class="container invis" id="analytics" style="display:none">
<table width="100%">
    <tr>
        <th>Page</th>
        <th>Hits</th>
    </tr>
    <?php
    include"setup_insec.php";
    $result = $conn_insec->query("SELECT * FROM analytics");
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["pagenum"] . "</td><td>" . $row["hits"] . "</td></tr>";
    }
?>
</table>
</div>