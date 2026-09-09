<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <div class="card">
            <?php if (isset($error)): ?>
                <p class="error"><?= html_escape($error) ?></p>
            <?php endif; ?>
            <form action="<?= site_url('auth/register') ?>" method="post">
                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <button type="submit" class="btn">Register</button>
            </form>
            <p class="footer-link">Already have an account? <a href="<?= site_url('auth/login') ?>">Login</a></p>
        </div>
    </div>
</body>
</html>