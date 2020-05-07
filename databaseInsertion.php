<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <?php
        //Store data in variables:
        $pagenum= $_POST["pagenum"];
        $video1= $_POST["video1"];
        $text1= $_POST["text1"];
        $video2= $_POST["video2"];
        //Log into the database:
        include"setup.php";
        //Insert data by SQL:
        $sql = "INSERT INTO pages (pagenum, video1, text1, video2)
        VALUES ('$pagenum', '$video1', '$text1', '$video2')";
        //Check that attempt was successfull:
        if ($conn->query($sql) === TRUE) {
            //give some feedback:
            echo "<p style=\"color: #63ebb0\"size=\"5rem\">New record created successfully in database!</p>";
        }
        //Tell the user that it didn't work:
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "No changes have been made."
        }
        //Disconnect from database:
        $conn->close();
    ?>
    
    <body>
        <!--This is just to avoid confusing the browser-->
    </body>
</html>