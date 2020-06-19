<div class="container" id="login" style="position: absolute; width: 500px; height: 25vh; display: block; left: 10%;">
    <form action="" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="video2">Username:</label>
            </div>
            <div class="col-75">
                <input type="text" name="username" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="video2">Password:</label>
            </div>
            <div class="col-75">
                <input type="text" name="password" placeholder="...">
            </div>
        </div>
        <div class="row">
                    <input type="submit" name="submit" value="Submit">
                </div>
    </form>
</div>
<?php 
        if (isset($_POST["submit"])){
            $_SESSION['username'] = $_POST['username'];
            //Send a sha256 hash to the server for security purposes:
            $_SESSION['password'] = hash("sha256", $_POST["password"]);
        }
?>