<?php if(isset($_POST["search"])){$search=$_POST["search"];}else{$search="";}if(isset($_GET["search"])){$search=$_GET["search"];}$config="http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,(strpos($_SERVER['PHP_SELF'],"/",1)+1))."config.yaml";$lines=file($config); ?><header id="header"><nav><ul class="navbar"><li><h1><?php echo trim($lines[41]); ?></h1></li><li><a href="<?php echo trim($lines[48]); ?>"><?php echo trim($lines[46]); ?></a></li><script>function shareToggle(){"block"==document.getElementById("shareWithClass").style.display?document.getElementById("shareWithClass").style.display="none":document.getElementById("shareWithClass").style.display="block"}</script><li><a href="<?php echo trim($lines[53]); ?>"onclick="shareToggle()"<?php if(isset($_SESSION["login_currentPerms"])and $_SESSION["login_currentPerms"]=="user"){ ?><?php }else{ ?><?php } ?>><?php echo trim($lines[51]); ?></a></li></ul><ul class="navbar"><li><a><form action="<?php echo trim($lines[58]); ?>"method="POST"style="clear:both"><div><div style="width:50%;height:6vh"><input name="search"placeholder="<?php echo trim($lines[56]); ?>"style="border:none;height:100%"value="<?php echo $search  ?>"></div></div></form></a></li><li><a href="<?php echo trim($lines[63]); ?>"><?php echo trim($lines[61]); ?></a></li><li><a href="<?php echo trim($lines[68]); ?>"><?php echo trim($lines[66]); ?></a></li><li><a href="<?php echo trim($lines[73]); ?>"><?php echo trim($lines[71]); ?></a></li><li><a href="<?php echo trim($lines[78]); ?>"><?php echo trim($lines[76]); ?></a></li><li><a href="<?php echo trim($lines[83]); ?>"><?php echo trim($lines[81]); ?></a></li></ul></nav></header><div id="mobileHeader"><p id="mobileName">Python's Web</p><div id="menuTab"onclick="menuTab()">≡</div></div>