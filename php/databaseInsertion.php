<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<?php
    include"setup_sec.php";
    //remove any commas
    //the ampersand forces reference so changes will update the actual value
    foreach ($_POST as &$value){
        $value = str_replace("'", "\'", $value);
    }
    
    #Create a new analytics entry if this page dosen't currently exist:
    $sql = "SELECT * FROM ANALYTICS WHERE pagenum = " . $_POST["pagenum"];
    $result = $conn_sec->query($sql);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO `analytics` (`id`, `pagenum`, `hits`) VALUES (NULL, '" . $_POST["pagenum"] . "', '0');";
        $conn_sec->query($sql);
    }
    
    $sql = "";
    #a counter for the loop
    $i = 0;
    while (true){
        if(isset($_POST["title" . $i])){
            if(! isset($_POST["pagenum" . $i])){
                $_POST["pagenum" . $i] = $_POST["pagenum"];
            }
            $sql = $sql . "INSERT INTO media (pagenum, title, url, text, size, display) VALUES ('" . $_POST["pagenum" . $i] . "', '" . $_POST["title" . $i] . "', '" . $_POST["url" . $i] . "', '" . $_POST["text" . $i] . "', '" . $_POST["size" . $i];
            if($_POST["display" . $i] == "video"){
                $sql = $sql . "', 'video";
            } else{
                $sql = $sql . "', 'text";
            }
            $sql = $sql . "'); ";
            $i++;
        } else{
            break;
        }
    }
    echo($sql);
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
<!--Give the admiin some time to realise that no changes have been made-->
<meta http-equiv="refresh" content="3;url=admin.php">
</html>