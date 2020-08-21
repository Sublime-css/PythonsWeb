<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<?php
    //print_r($_POST);
    include"setup_sec.php";
    //remove any commas
    foreach ($_POST as &$value){
        $value = str_replace("'", "\'", $value);
    }
        if(isset($_POST["videos_title"])){
            $sql = "UPDATE videos SET pagenum = '" . $_POST["videos_pagenum"] . "', title = '" . $_POST["videos_title"] . "', link = '" . $_POST["videos_link"] . "', text = '" . $_POST["videos_text"] . "', size = '" . $_POST["videos_size"] . "' WHERE id = '" . $_POST["id"] . "'";
        } else{
            $sql = "UPDATE texts SET pagenum = '" . $_POST["texts_pagenum"] . "', title = '" . $_POST["texts_title"] . "', link = '" . $_POST["texts_link"] . "', text = '" . $_POST["texts_text"] . "', size = '" . $_POST["texts_size"] . "' WHERE id = '" . $_POST["id"] . "'";
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
    if ($conn_sec->query($sql) === true) {
        //give some feedback:
        //echo "<p style=\"color: #63ebb0\"size=\"5rem\">Record Updated Successfully.</p>";
    }
    //Tell the user that it didn't work:
    else {
        //echo "Error: " . $sql . "<br>" . $conn_sec->error;
        //echo "No changes have been made.";
    }
    //Disconnect from database:
    $conn_sec->close();
?>

<meta http-equiv="refresh" content="0;url=admin.php">
</html>