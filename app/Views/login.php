<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact">contact:</label>
                <input type="contact" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="address">address:</label>
                <input type="address" id="address" name="address" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div id="message"></div>
    </div>
    <script src="<?= base_url('javascript/login.js') ?>"></script>
</body>
</html>