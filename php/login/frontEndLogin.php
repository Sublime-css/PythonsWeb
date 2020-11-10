<div class="loginWindow" id="login" onsubmit="if(document.getElementById('login_email').value){document.getElementById('loginOrRegister').value = 'register';}">
    <form action="login/loginHandler.php" method="POST">
        <div class="row-tall">
            <div class="col-75">
                <input type="text" id="login_email" name="login_email" placeholder="Enter an email address to register...">
            </div>
        </div>
        <div class="row-tall">
            <div class="col-75">
                <input type="text" name="login_username" placeholder="Username...">
            </div>
        </div>
        <div class="row-tall">
            <div class="col-75">
                <input type="password" name="login_password" placeholder="Password...">
            </div>
        </div>
        <div class="row invis">
            <div class="col-75">
                <select id="loginOrRegister" name="loginOrRegister">
                    <option value="login" selected>Login</option>
                    <option value="register">Register</option>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="login">
        </div>
    </form>
</div>
