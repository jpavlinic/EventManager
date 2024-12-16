<body class="login">
    <h1 class="pagetitle">Event Management</h1>
    <h3 class="pagesubtitle">Membership only Event Management System. Register to access the best events in town.</h3>

    <form method="POST" action="<?php echo PROJECT_URL ?>/user/login" class="loginform">
        <h2>Register:</h2><br>
        
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="">Select</option>
            <option value="1">Attendee</option>
            <option value="2">Admin</option>
        </select>

        <input type="submit" value="Register" class="loginbutton">
    </form>

    <div class="registerbutton">
        <a href="<?php echo PROJECT_URL ?>/user/login">Already have an account? Login</a>
    </div>

