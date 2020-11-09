<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <?php
        #Set the default page to delete incase the user wants to delete lots of pages:
        $_SESSION["admin_defaultTab"] = "delpage";
        //Store data in variables:
        $delpagenum= $_POST["delpagenum"];
        //Log into the database:
        include"setup_sec.php";
        //Take advantage of foreign key CASCADE attribute to delete all media items on the page    
        $sql = "DELETE FROM analytics WHERE pagenum = $delpagenum;";
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
    <meta http-equiv="refresh" content="0;url=admin.php">
</html>