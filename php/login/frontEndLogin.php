<div class="container" id="login" style="position: absolute; width: 100vw; height: 85.75vh; display: block; bottom: 0px; overflow: clip;">
    <form action="login/loginHandler.php" method="POST">
        <div class="row" id="login_email">
            <div class="col-25">
                <label for="email">Email Address:</label>
            </div>
            <div class="col-75">
                <input type="text" name="login_email" placeholder="Enter an email address to register...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="username">Username:</label>
            </div>
            <div class="col-75">
                <input type="text" name="login_username" placeholder="...">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password">Password:</label>
            </div>
            <div class="col-75">
                <input type="password" name="login_password" placeholder="...">
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
            <input type="submit" value="login">
        </div>
    </form>
</div>
