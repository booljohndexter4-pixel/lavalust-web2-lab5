<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h1>Create Account</h1>
                <p>Sign up to get started</p>
            </div>
            <div class="auth-body">
                <?php if (isset($error)): ?>
                    <p class="error"><?= html_escape($error) ?></p>
                <?php endif; ?>
                <form action="<?= site_url('auth/register') ?>" method="post">
                    <label>Username</label>
                    <input type="text" name="username" required>

                    <label>Password</label>
                    <input type="password" name="password" required>

                    <button type="submit" class="btn-auth">Register</button>
                </form>
                <p class="auth-footer">Already have an account? <a href="<?= site_url('auth/login') ?>">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>