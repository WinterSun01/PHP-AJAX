<?php

session_start();

if (empty($_SESSION['csrf_token'])) 
    {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; }
        input[type=text], input[type=password] { width: 100%; padding: 8px; margin: 8px 0; }
        input[type=submit] { padding: 10px 20px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Вход в систему</h2>

    <?php if (isset($_GET['error'])): ?>
        <p class="error">
            <?php
            switch ($_GET['error']) 
            {
                case 'invalid': echo 'Неверный логин или пароль';
                case 'csrf': echo 'Ошибка безопасности (CSRF)';
                case 'login_format': echo 'Логин: только латиница и цифры, 3–20 символов';
                default: echo 'Неизвестная ошибка';
            }
            ?>
        </p>
    <?php endif; ?>

    <form action="auth.php" method="post">
        <label>Логин:</label>
        <input type="text" name="login" required minlength="3" maxlength="20">

        <label>Пароль:</label>
        <input type="password" name="password" required>

        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

        <input type="submit" value="Войти">
    </form>
</body>
</html>