<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
<!--Go back to the admin page after: 1) the user has been informed the edit worked 2) this page has finished executing-->
<meta http-equiv="refresh" content="3;url=admin.php">
<?php
    
    //We need to make multiple SQL queries from the array of data supplied by $_POST:
    $i = 0; //loop counter
    $t = 0; //table counter
    $l = 0; //length of the current table
    $tables = ['pages','videos', 'headings', 'text', 'size']; //the list of table names.
    $offsets = [1,9,17,25,33]; //offsets of the tables in $_POST -- this allows for easy redesign of this script if the data structure is changed.

    $sql = "";
    
//    $sql = "INSERT INTO pages (";   //Start the SQL query.
//        foreach ($_POST as $key => $value) {
//            echo "debug -- looping " . $i . ", key " . $key . ", value " . $value . "\r\n";
//            //Append the key to the SQL string:
//            $i++;   //Need to count how many times we have gone around.
//            if ($value){    //dont add the key unless there is a value for that key
//                $sql = $sql . $key . ",";   //Add the next key, seperated by a comma.
//            }
//            if(($i - 1) % 8 == 0){  //If it's time to finish up with this table and start on the next...
//                $t++;
//                if( $t == 0){ //Best not to go looking for index No. -1!
//                    $l = $offsets[$t];
//                } else {
//                    $l = $offsets[$t] - $offsets[$t - 1];   //The length of the current table.
//                }
//                echo "debug -- finished table no." . $t . ", i=" . $i . ", l=" . $l . "\r\n";
//                //cut the extra , or SQL will complain and things will explode:
//                $sql= substr($sql, 0, -1);
//                //now its time for the actual values:
//                $sql = $sql . ") VALUES (";
//                //Loop through POST and get the data, turning it into a string SQL will accept.
//                $x = 0;
//                foreach ($_POST as $key2 => $value2) {
//                    echo "debugbug -- " . $t;
//                    $x++;
//                    if($x <= ($l + $offsets[$t -1]) and $x >= $offsets[$t -1] ) {
//                        //the ' character breaks everything as it inverts the string-ness of the entire string. Lets add a backslash so it won't explode...
//                        $_POST[$key2] = str_replace("'","\'",$value2);
//                        //Append the sanitised data to the SQL string:
//                        $sql = $sql . "'" . $_POST[$key2] . "',";
//                    }
//                }
//                //There's a really annoying last comma that breaks everything in the event that there was more than one key/value combo, it needs to be disposed of:
//                if(strpos(strrev($sql), ",") == strlen($sql)){  //strpos will find the first occurrence, we want the last, so use strrev()
//                    $sql = substr($sql, 0, -1);
//                }
//                //Close bracket and semicolon is that last thing the string needs:
//                $sql = $sql . "); ";
//                if($t <= count($offsets)){
//                    $sql = $sql . "INSERT INTO " . $tables[$t] . " (";
//                }
//            }
//        }

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