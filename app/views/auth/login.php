<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h1>Welcome Back</h1>
                <p>Login to manage your products</p>
            </div>
            <div class="auth-body">
                <?php if (isset($error)): ?>
                    <p class="error"><?= html_escape($error) ?></p>
                <?php endif; ?>
                <form action="<?= site_url('auth/login') ?>" method="post">
                    <label>Username</label>
                    <input type="text" name="username" required>

                    <label>Password</label>
                    <input type="password" name="password" required>

                    <button type="submit" class="btn-auth">Log In</button>
                </form>
                <p class="auth-footer">No account yet? <a href="<?= site_url('auth/register') ?>">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>