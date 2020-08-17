<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<?php
    print_r($_POST);
    require_once("session.php");
    include"setup_sec.php";
    if (!isset($_POST["pagenum"]) and isset($_SESSION["updatePage_pagenum"])){
        $_POST["pagenum"] = $_SESSION["updatePage_pagenum"];
        echo "catastrophy averted -- " . $_POST["pagenum"];
    }
    
    $sql = "INSERT INTO pages (pagenum) VALUES ('" . $_POST["pagenum"] . "');";
    $conn_sec->query($sql);
    
    $sql = "SELECT id FROM pages WHERE pagenum = " . $_POST["pagenum"];
    $result = $conn_sec->query($sql);
    if ($result -> num_rows > 0){
        $row = $result->fetch_assoc();
    }
    
    $sql = "";
    $i = 0;
    while (true){
        if(isset($_POST["videos_title" . $i])){
            $sql = $sql . "INSERT INTO videos (pageid, title, link, text, size) VALUES ('" . $row["id"] . "', '" . $_POST["videos_title" . $i] . "', '" . $_POST["videos_link" . $i] . "', '" . $_POST["videos_text" . $i] . "', '" . $_POST["videos_size" . $i] . "'); ";
            $i++;
        } else{
            break;
        }
    }
    while (true){
        if(isset($_POST["texts_title" . $i])){
            $sql = $sql . "INSERT INTO texts (pageid, title, link, text, size) VALUES ('" . $row["id"] . "', '" . $_POST["texts_title" . $i] . "', '" . $_POST["texts_text" . $i] . "', '" . $_POST["texts_size" . $i] . "'); ";
            $i++;
        } else{
            break;
        }
    }
    echo "<br>SQL query: " . $sql . "<br>";
    
    //Due to security vunerbilities discovered in penetration testing, i need to sanitise the data:
    $illegal = ["<script>", "</script>", "\\", "<?php", "?>"];
    foreach ($illegal as $hack){
        if (strpos($sql, $hack) !== false){
            echo "<p style=\"color: red\"size=\"5rem\">Illegal characters used: \"&ltscript&gt\", \"&lt/script&gt\", \"\\\", \"&lt?php\", \"?&gt\" are not permitted for security reasons.";
            die();
        }
    }
    //Now time to actually use the SQL string!
    //Log into the database:
    //Insert data by SQL:
    //Check that attempt was successfull:
    if ($conn_sec->multi_query($sql) === true) {
        //give some feedback:
        echo "<p style=\"color: #63ebb0\"size=\"5rem\">New record created successfully in database.</p>";
    }
    //Tell the user that it didn't work:
    else {
        echo "Error: " . $sql . "<br>" . $conn_sec->error;
        echo "No changes have been made.";
    }
    //Disconnect from database:
    $conn_sec->close();
?>

<!--<meta http-equiv="refresh" content="3;url=admin.php">-->
</html>