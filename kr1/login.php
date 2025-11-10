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
        body 
        {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }
        h2 
        {
            text-align: center;
        }
        label 
        {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }
        input[type=text],
        input[type=password] 
        {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type=submit] 
        {
            background-color: #1976d2;
            color: white;
            padding: 12px 24px;
            margin-top: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type=submit]:hover 
        {
            background-color: #1565c0;
        }

        .error-message 
        {
            background-color: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
            border-radius: 8px;
            padding: 14px 16px;
            margin: 16px 0;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h2>Вход в систему</h2>

    <?php if (!empty($_GET['error'])): ?>
        <div class="error-message">
            <?php
            $error_code = $_GET['error'];
            $errors = [
                'invalid'      => 'Неверный логин или пароль',
                'csrf'         => 'Ошибка безопасности (CSRF)',
                'login_format' => 'Логин: только латиница и цифры, 3–20 символов',
            ];
            echo htmlspecialchars($errors[$error_code] ?? 'Неизвестная ошибка');
            ?>
        </div>
    <?php endif; ?>

    <form action="auth.php" method="post">
    <label>Логин:</label>
    <input 
        type="text" 
        name="login" 
        required 
        minlength="3" 
        maxlength="20"
        value="<?= htmlspecialchars($_GET['login'] ?? '') ?>"
        placeholder="введите логин"
    >

    <label>Пароль:</label>
    <input 
        type="password" 
        name="password" 
        required
        placeholder="введите пароль"
    >

    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

    <input type="submit" value="Войти">
</form>
</body>
</html>