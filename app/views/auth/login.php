<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <div class="card">
            <?php if (isset($error)): ?>
                <p class="error"><?= html_escape($error) ?></p>
            <?php endif; ?>
            <form action="<?= site_url('auth/login') ?>" method="post">
                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <button type="submit" class="btn">Login</button>
            </form>
            <p class="footer-link">No account yet? <a href="<?= site_url('auth/register') ?>">Register</a></p>
        </div>
    </div>
</body>
</html>