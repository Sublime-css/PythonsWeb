<!DOCTYPE html>
<html>
    <?php
    print_r($_POST);
    print $_POST["pagenum"];
        $pagenum= $_POST["pagenum"];
        $video1= $_POST["video1"];
        $text1= $_POST["text1"];
        $video2= $_POST["video2"];
        include"setup.php";
        $sql = "INSERT INTO pages (pagenum, video1, text1, video2)
        VALUES ('$pagenum', '$video1', '$text1', '$video2')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
    ?>
    <body>
    
    </body>
</html>