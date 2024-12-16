<body class="login">

    <h1 class="pagetitle">Event Management</h1>
    <h3 class="pagesubtitle">Membership only Event Management System. Login or Register to access the best events in town.</h3>


    <form method="POST" action="<?php echo PROJECT_URL ?>/user/events" class="loginform">
    <h2>Login: </h2><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login" class="loginbutton">
    </form>
    <div class="registerbutton">
        <a href="<?php echo PROJECT_URL ?>/user/register">Don't have an account? Register</a>
    </div>