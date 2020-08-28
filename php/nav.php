<?php
if (isset($_POST["search"]))
{
    $search = $_POST["search"];
}
else
{
    $search = "";
}
if (isset($_GET["search"]))
{
    $search = $_GET["search"];
}
?>

<header id="header">
    <nav>
        <ul class="navbar">
            <li>
                <h1>Python's Web</h1> </a>
            </li>
            <li><a href="index.php?page=2">Register/Login</a></li>
            <script>
                function shareToggle(){   
                    if(document.getElementById('shareWithClass').style.display == 'block'){
                        document.getElementById('shareWithClass').style.display = 'none';
                    }
                    else {
                        document.getElementById('shareWithClass').style.display = 'block';
                    }
                }
            </script>
            <li><a <?php if(isset($_SESSION["login_currentPerms"]) and $_SESSION["login_currentPerms"] == "user"){ ?> onclick="shareToggle()" <?php } else{ ?>href="index.php?page=3"<?php } ?>>Share With Class</a></li>
        </ul>
        <ul class="navbar">
            <li><a>
                    <form action="index.php?page=4" method="POST" style="clear:both;">
                        <div>
                            <div style="width: 50%;">
                                <input type="text" style="border: none; height: 100%" name="search" value="<?php echo $search ?>" placeholder="Search...">
                            </div>
                        </div>
                    </form>
                </a></li>
            <li><a href="index.php?page=5">Coursework</a></li>
            <li><a href="index.php?page=6">Donate</a></li>
            <li><a href="index.php?page=7">News</a></li>
            <li><a href="index.php?page=8">F. A. Q.</a></li>
            <li><a href="index.php?page=9">Reference</a></li>
        </ul>
    </nav>
</header>
<div id="mobileHeader">
    <p id="mobileName">Python's Web</p>
    <div onclick="menuTab()" id="menuTab">≡</div>
</div>
