<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <meta http-equiv="refresh" content="3;url=admin.php">
    <?php
//Store data in variables:
$updatefield= $_POST["updatefield"];
$updatevalue= $_POST["updatevalue"];
$updatepagenum= $_POST["updatepagenum"];
//Log into the database:
include"setup.php";
//Insert data by SQL:
$sql = "UPDATE pages
SET $updatefield = '$updatevalue'
WHERE pagenum = '$updatepagenum';";
//Check that attempt was successfull:
if ($conn->query($sql) === TRUE) {
    //give some feedback:
    echo "<p style=\"color: #63ebb0\"size=\"5rem\">Record updated sucessfully.</p>";
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
        <!--This is just so as to not confuse the browser-->
    </body>
</html>