<!DOCTYPE html><html><?php require_once("session.php");$_SESSION["admin_defaultTab"]="editpage";include"setup_sec.php";foreach($_POST as&$value){$value=str_replace("'","\'",$value);}$sql="UPDATE media SET pagenum = '".$_POST["pagenum"]."', title = '".$_POST["title"]."', url = '".$_POST["url"]."', text = '".$_POST["text"]."', size = '".$_POST["size"];if($_POST["display"]=="video"){$sql=$sql."', display = 'video'";}else{$sql=$sql."', display = 'text'";}$sql=$sql." WHERE id = '".$_POST["id"]."'";$illegal=["<script>","</script>","<?php","?>"];foreach($illegal as $hack){if(strpos($sql,$hack)!==false){echo "<p style=\"color: red\"size=\"5rem\">Illegal characters used: \"&ltscript&gt\", \"&lt/script&gt\", \"&lt?php\", \"?&gt\" are not permitted for security reasons.";die();}}if($conn_sec->query($sql)===true){}else{}$conn_sec->close(); ?><meta http-equiv="refresh" content="0;url=admin.php"></html>