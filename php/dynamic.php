<?php
    //Dynamic content for the website:
    //Default to the gallery:
    $Page = '5';
    //Try for what page the user wants, and dont explode if there isn't one:
    //Also make sure that the GET is 0 or 1 character in length, because otherwise anyone can write SQL in the URL bar which will be arbitrarilly executed.
    //Before this was patched, SQL could in theory be injected via the URL. The one-query-only nature of MySQLi would have provided some protection, but not enough to make sure that the website is safe from bad actors:
    if(isset($_GET["page"])){
        if(strlen($_GET["page"]) <= 1){
            $Page = $_GET['page'];
        }
    }
    //Need to login to the database -- insecure because all we need to do is read data:
    require_once("setup_insec.php");

    //Get the data that corrosponds to the current page:
    $sql = "SELECT * FROM media WHERE pagenum = $Page AND display = 'video'";
    $result = $conn_insec->query($sql);
    //Check that we got something, or error if we didn't:
    if ($result->num_rows > 0) {
        //Do this for each video:
        while($row = $result->fetch_assoc()){
            #Create a content box with the correct CSS class that will open the video in an iframe:
            ?><div class="<?php echo"dynamic " . $row["size"] . " "; if ($row["text"] == ""){echo "notext ";} ?>" onclick="window.location.href = 'viewer.php?v=<?php echo $row['url'];?>&id=<?php echo $row['id']?>';">
                <h1><?php echo $row["title"];?></h1>
                <p><?php echo $row["text"];?></p>
            </div><?php
        }
                }
        #And do a similar thing for texts:
        $sql = "SELECT * FROM media WHERE pagenum = $Page AND display = 'text'";
        $result = $conn_insec->query($sql);
        //Check that we got something, or error if we didn't:
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                ?><div class="<?php echo"dynamic " . $row["size"] . " "; if ($row["text"] == ""){echo "notext ";} ?>" style= "background-image: url(../img/<?php echo $row["url"]?>)">
                    <h1><?php echo $row["title"];?></h1>
                    <p><?php echo $row["text"];?></p>
                </div><?php
            }
        }
$conn_insec->close();
?>