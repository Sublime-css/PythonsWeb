<div class="container" id="login" style="position: absolute; width: 100vw; height: 85.75vh; display: block; bottom: 0px; overflow: clip;">
    <form action="" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="email">Email Address:</label>
            </div>
            <div class="col-75">
                <input type="text" name="email" placeholder="Enter an email address to register...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="username">Username:</label>
            </div>
            <div class="col-75">
                <input type="text" name="username" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password">Password:</label>
            </div>
            <div class="col-75">
                <input type="password" name="password" placeholder="...">
            </div>
        </div>
        <div class="row">
                    <div class="col-25">
                        <label for="loginOrRegister">Register or login?</label>
                    </div>
                    <div class="col-75">
                        <select id="loginOrRegister" name="loginOrRegister">
                            <option value="login" selected>Login</option>
                            <option value="register" >Register</option>
                        </select>
                    </div>
                </div>
        
        <div class="row">
                    <input type="submit" name="submit" value="Submit">
                </div>
    </form>
</div>
<?php   
if (isset($_POST["submit"])){
    $_SESSION['loginOrRegister'] = $_POST["loginOrRegister"];
    $_SESSION['email'] = $_POST["email"];
    //Send a sha256 hash to the server for security purposes:
    $_SESSION['username'] = hash("sha256", $_POST["username"]);
    $_SESSION['password'] = hash("sha256", $_POST["password"]);
}
?>