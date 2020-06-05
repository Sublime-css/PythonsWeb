<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <meta http-equiv="refresh" content="3;url=admin.php">
    <?php
        //Store data in variables:
        $delpagenum= $_POST["delpagenum"];
        //Log into the database:
        include"setup.php";
        //Insert data by SQL:
        $sql = "DELETE FROM pages
        WHERE pagenum = $delpagenum;";
        //Check that attempt was successfull:
        if ($conn->query($sql) === TRUE) {
            //give some feedback:
            echo "<p style=\"color: #63ebb0\"size=\"5rem\">Page Removed Successfully.</p>";
        }
        //Tell the user that it didn't work:
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<br>No changes have been made.";
        }
        //Disconnect from database:
        $conn->close();
    ?>
    
    <body>
        
    </body>
</html>