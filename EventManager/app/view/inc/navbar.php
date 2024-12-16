<body>
<nav>
    <div class="userinfo">Hello <?php echo $data['username']; ?></div>

    <form action="<?php echo PROJECT_URL ?>/user/events" method="post" style="display:inline;">
        <input type="hidden" name="username" value="<?php echo $data['username']; ?>">
        <input type="hidden" name="password" value="<?php echo $data['password']; ?>">
        <button class="navtitle logout" type="submit">Events</button>
    </form>
    
    <?php if ($data['role'] == 'admin'): ?>
        <form action="<?php echo PROJECT_URL ?>/user/admin" method="post" style="display:inline;">
        <input type="hidden" name="username" value="<?php echo $data['username']; ?>">
        <input type="hidden" name="password" value="<?php echo $data['password']; ?>">
        <button class="navtitle logout" type="submit">Admin</button>
    </form>
    <?php endif; ?>

    <?php if ($data == 'manage'): ?>
        <form action="<?php echo PROJECT_URL ?>/user/admin" method="post" style="display:inline;">
        <input type="hidden" name="username" value="<?php echo $data['username']; ?>">
        <input type="hidden" name="password" value="<?php echo $data['password']; ?>">
        <button class="navtitle logout" type="submit">Back</button>
    </form>
    <?php endif; ?>

    <button class="logout" onclick="window.location.href='<?php echo PROJECT_URL ?>/user/login'">Logout</button>

</nav>