<?php

session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] !== 1) 
    {
        header('Location: login.php');
        exit;
    }

$file = 'users/1.txt';

if (file_exists($file)) 
    {
        $content = file_get_contents($file);
    } else 
        {
            $content = 'Файл не найден';
        }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        a { color: #0066cc; }
    </style>
</head>
<body>
    <h2>Привет, студент!</h2>
    <p><strong>Содержимое файла 1.txt:</strong></p>
    <pre><?= htmlspecialchars($content) ?></pre>

    <p><a href="logout.php">Выйти</a></p>
</body>
</html>