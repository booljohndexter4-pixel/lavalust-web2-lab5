<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?= html_escape($error) ?></p>
    <?php endif; ?>
    <form action="<?= site_url('auth/register') ?>" method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="<?= site_url('auth/login') ?>">Login</a></p>
</body>
</html>