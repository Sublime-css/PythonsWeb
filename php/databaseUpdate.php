<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<?php
    //Set the update page as default incase the user wants to update many values:
    require_once("session.php");
    $_SESSION["admin_defaultTab"] = "editpage";
    //print_r($_POST);
    include"setup_sec.php";
    //remove any commas
    foreach ($_POST as &$value){
        $value = str_replace("'", "\'", $value);
    }
    $sql = "UPDATE media SET pagenum = '" . $_POST["pagenum"] . "', title = '" . $_POST["title"] . "', url = '" . $_POST["url"] . "', text = '" . $_POST["text"] . "', size = '" . $_POST["size"];
    if($_POST["display"] == "video"){
        $sql = $sql . "', display = 'video'"; 
    } else{
        $sql = $sql . "', display = 'text'";
    }
    $sql = $sql . " WHERE id = '" . $_POST["id"] . "'";
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