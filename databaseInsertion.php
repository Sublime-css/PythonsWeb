<!--Insert information gathered into the database with admin perms:-->
<!DOCTYPE html>
<html>
    <?php
        //Store data in variables:
        $pagenum= $_POST["pagenum"];
        $video1= $_POST["video1"];
        $video2= $_POST["video2"];
        $video3= $_POST["video3"];
        $video4= $_POST["video4"];
        $video5= $_POST["video5"];
        $video6= $_POST["video6"];
        $video7= $_POST["video7"];
        $video8= $_POST["video8"];
        $heading1= $_POST["heading1"];
        $heading2= $_POST["heading2"];
        $heading3= $_POST["heading3"];
        $heading4= $_POST["heading4"];
        $heading5= $_POST["heading5"];
        $heading6= $_POST["heading6"];
        $heading7= $_POST["heading7"];
        $heading8= $_POST["heading8"];
        $text1= $_POST["text1"];
        $text2= $_POST["text2"];
        $text3= $_POST["text3"];
        $text4= $_POST["text4"];
        $text5= $_POST["text5"];
        $text6= $_POST["text6"];
        $text7= $_POST["text7"];
        $text8= $_POST["text8"];
        $size1= $_POST["size1"];
        $size2= $_POST["size2"];
        $size3= $_POST["size3"];
        $size4= $_POST["size4"];
        $size5= $_POST["size5"];
        $size6= $_POST["size6"];
        $size7= $_POST["size7"];
        $size8= $_POST["size8"];
        //Log into the database:
        include"setup.php";
        //Insert data by SQL:
        $sql = "INSERT INTO pages (pagenum, video1, video2, video3, video4, video5, video6, video7, video8, heading1, heading2, heading3, heading4, heading5, heading6, heading7, heading8, text1, text2, text3, text4, text5, text6, text7, text8, size1, size2, size3, size4, size5, size6, size7, size8)
        VALUES ('$pagenum', '$video1', '$video2','$video3','$video4','$video5','$video6','$video7','$video8','$heading1','$heading2','$heading3','$heading4','$heading5','$heading6','$heading7','$heading8','$text1','$text2','$text3','$text4','$text5','$text6','$text7','$text8','$size1','$size2','$size3','$size4','$size5','$size6','$size7','$size8')";
        //Check that attempt was successfull:
        if ($conn->query($sql) === TRUE) {
            //give some feedback:
            echo "<p style=\"color: #63ebb0\"size=\"5rem\">New record created successfully in database!</p>";
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
        <a href="admin.php">Back to Admin</a>
    </body>
</html>