<?php $Page='5';if(isset($_GET["page"])){if(strlen($_GET["page"])<=1){$Page=$_GET['page'];}}require_once("setup_insec.php");$sql="SELECT * FROM analytics WHERE PAGENUM = $Page";$result=$conn_insec->query($sql);if($result->num_rows==1){$row=$result->fetch_assoc();}$sql="UPDATE analytics SET hits = '".($row["hits"]+1)."' WHERE id = '".$row["id"]."'";$result=$conn_insec->query($sql);$sql="SELECT * FROM media WHERE pagenum = $Page AND display = 'video'";$result=$conn_insec->query($sql);if($result->num_rows>0){while($row=$result->fetch_assoc()){ ?><div class="<?php echo"dynamic ".$row["size"]." ";if($row["text"]==""){echo "notext ";} ?>"onclick='document.getElementById("videoPlayer").style.display="block",document.getElementById("videoPlayer").src="../videos/<?php echo $row['url']; ?>"'><h1><?php echo $row["title"]; ?></h1><p><?php echo $row["text"]; ?></p></div><?php } ?><iframe id="videoPlayer"src=""style="border:3px solid #707070;display:none;position:fixed;bottom:0;left:0"></iframe><?php }$sql="SELECT * FROM media WHERE pagenum = $Page AND display = 'text'";$result=$conn_insec->query($sql);if($result->num_rows>0){while($row=$result->fetch_assoc()){ ?><div class="<?php echo"dynamic ".$row["size"]." ";if($row["text"]==""){echo "notext ";} ?>"style="background-image:url(img/<?php echo $row["url"] ?>)"><h1><?php echo $row["title"]; ?></h1><p><?php echo $row["text"]; ?></p></div><?php }}$conn_insec->close(); ?>