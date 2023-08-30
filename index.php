<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form id="login-form" class="login-form">
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="email-error" class="error-message"></span>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <div class="widgets">
            <div id="time-widget" class="widget">
                <div class="clock-container">
                    <div class="clock-hour"></div>
                    <div class="clock-minute"></div>
                    <div class="clock-second"></div>
                    <div class="clock-center"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="back-end/script.js"></script>
</body>
</html>
