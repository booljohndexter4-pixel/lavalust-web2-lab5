<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?= html_escape($error) ?></p>
    <?php endif; ?>
    <form action="<?= site_url('auth/login') ?>" method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p>No account yet? <a href="<?= site_url('auth/register') ?>">Register</a></p>
</body>
</html>