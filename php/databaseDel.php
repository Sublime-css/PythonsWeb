<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <meta http-equiv="refresh" content="3;url=admin.php">
    <?php
        //Store data in variables:
        $delpagenum= $_POST["delpagenum"];
        //Log into the database:
        include"setup_sec.php";
        //Insert data by SQL:
        $sql = "DELETE FROM pages
        WHERE pagenum = $delpagenum;";
        //Now that the record is gone from the pages table, clean up the mess in other tables as it is just wasted data
        //List the table names -- be sure to also update this list in trim.php
        foreach (["videos", "headings", "sizes", "texts"] as $table){
            $sql = $sql . "DELETE FROM $table WHERE pageid NOT IN (SELECT id FROM pages);";
        }
        //Check that attempt was successfull:
        if ($conn_sec->multi_query($sql) === TRUE) {
            //give some feedback:
            echo "<p style=\"color: #63ebb0; position: absolute; top: 2rem\"size=\"5rem\">Page Removed Successfully.</p>";
        }
        //Tell the user that it didn't work:
        else {
            echo "Error: " . $sql . "<br>" . $conn_sec->error;
            echo "<br>No changes have been made.";
        }
        //Disconnect from database:
        $conn_sec->close();
    ?>
    
    <body>
        
    </body>
</html>