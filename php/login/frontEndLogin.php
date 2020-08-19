<div class="loginWindow" id="login" onsubmit="if(document.getElementById('login_email').value){document.getElementById('loginOrRegister').value = 'register';}">
    <form action="login/loginHandler.php" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="email">Email Address:</label>
            </div>
            <div class="col-75">
                <input type="text" id="login_email" name="login_email" placeholder="Enter an email address to register...">
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
        <div class="row invis">
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
