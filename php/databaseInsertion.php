<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<?php
    include"setup_sec.php";
    //remove any commas
    foreach ($_POST as &$value){
        $value = str_replace("'", "\'", $value);
    }
    $sql = "";
    $i = 1;
    while (true){
        if(isset($_POST["videos_title" . $i])){
            if(! isset($_POST["videos_pagenum" . $i])){
                $_POST["videos_pagenum" . $i] = $_POST["pagenum"];
            }
            $sql = $sql . "INSERT INTO videos (pagenum, title, link, text, size) VALUES ('" . $_POST["videos_pagenum" . $i] . "', '" . $_POST["videos_title" . $i] . "', '" . $_POST["videos_link" . $i] . "', '" . $_POST["videos_text" . $i] . "', '" . $_POST["videos_size" . $i] . "'); ";
            $i++;
        } else{
            break;
        }
    }
    $i = 1;
    while (true){
        if(isset($_POST["texts_title" . $i])){
            if(! isset($_POST["texts_pagenum" . $i])){
                $_POST["texts_pagenum" . $i] = $_POST["pagenum"];
            }
            $sql = $sql . "INSERT INTO texts (pagenum, title, text, size) VALUES ('" . $_POST["texts_pagenum" . $i] . "', '" . $_POST["texts_title" . $i] . "', '" . $_POST["texts_text" . $i] . "', '" . $_POST["texts_size" . $i] . "'); ";
            $i++;
        } else{
            break;
        }
    }
    
    //Due to security vunerbilities discovered in penetration testing, i need to sanitise the data:
    $illegal = ["<script>", "</script>", "<?php", "?>"];
    foreach ($illegal as $hack){
        if (strpos($sql, $hack) !== false){
            echo "<p style=\"color: red\"size=\"5rem\">Illegal characters used: \"&ltscript&gt\", \"&lt/script&gt\", \"&lt?php\", \"?&gt\" are not permitted for security reasons.";
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

<meta http-equiv="refresh" content="0;url=admin.php">
</html>