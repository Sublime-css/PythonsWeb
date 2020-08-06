<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<!--Go back to the admin page after: 1) the user has been informed the edit worked 2) this page has finished executing-->
<meta http-equiv="refresh" content="3;url=admin.php">
<?php

    print_r($_POST);
    $sql = "";
    
    foreach ($_POST as $key => $value) {
        $i++;
        if($value){
            $names = $names . "," . $key;
            $values = "'" . $values . "',";
        }
        if(in_array($i, $tables)){
            $sql = $sql . "; INSERT INTO" . $tables[$t];
            
            $t++;
        }
    }
    //**Everything from here down is unchanged and known to work**//

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
    include"setup_sec.php";
    //Insert data by SQL:
    //Check that attempt was successfull:
    if ($conn_sec->query($sql) === true) {
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

<body>

</body>

</html>
<!--

-->