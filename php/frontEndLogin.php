<div class="container" style="position: absolute; width: 500px; height: 500px; display: block;">
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
<?php 
        session_start;
        if (isset($_POST["submit"])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
        }
?>