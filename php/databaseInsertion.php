<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <!--Go back to the admin page after: 1) the user has been informed the edit worked 2) this page has finished executing-->
    <meta http-equiv="refresh" content="3;url=admin.php">
    <?php
        //Store SQL syntax in a string, starting with the columns:
        $sql = "INSERT INTO pages (";
        foreach ($_POST as $key => $value) {
            //Append the key to the SQL string:
            $sql = $sql . $key . ",";
        }
        //cut the extra , or SQL will complain and things will explode:
        $sql = substr($sql, 0, -1);
        //now its time for the actual values:
        $sql = $sql . ") VALUES (";
        //Loop through POST and get the data, turning it into a string SQL will accept.
        foreach ($_POST as $key => $value) {
            //the ' character breaks everything as it inverts the string-ness of the entire string. Lets add a backslash so it won't explode...
            $_POST[$value] = str_replace("'","\'",$value);
            //Append the sanitised data to the SQL string:
            $sql = $sql . "'" . $_POST[$value] . "',";
        }
        //There's a really annoying last comma that breaks everything, it needs to be disposed of:
        $sql = substr($sql, 0, -1);
        //Close bracket is that last thing the string needs:
        $sql = $sql . ")";
        
        //Due to security vunerbilities discovered in penetration testing, i need to sanitise the data:
        
        $illegal = ["<script>", "</script>", "\\", "<?php", "?>"];
        foreach ($illegal as $hack){
            if (strpos($sql, $hack) !== false){
                echo "<p style=\"color: red\"size=\"5rem\">Illegal characters used: \"&ltscript&gt\", \"&lt/script&gt\", \"\\\", \"&lt?php\", \"?&gt\" are not permitted";
                die();
            }
        }
            
        //Now time to actually use the SQL string!
        //Log into the database:
        include"setup.php";
        //Insert data by SQL:
        //Check that attempt was successfull:
        if ($conn->query($sql) === TRUE) {
            //give some feedback:
            echo "<p style=\"color: #63ebb0\"size=\"5rem\">New record created successfully in database.</p>";
        }
        //Tell the user that it didn't work:
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "No changes have been made.";
        }
        //Disconnect from database:
        $conn->close();
    ?>
    
    <body>
        
    </body>
</html>