<?php

session_start();

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) 
    {
        header('Location: login.php?error=csrf');
        exit;
    }

$login = trim($_POST['login'] ?? '');
$password = $_POST['password'] ?? '';

if ($login === '' || $password === '') 
    {
        header('Location: login.php?error=invalid');
        exit;
    }

$login_pattern = '/^[a-zA-Z0-9]{3,20}$/';
if (!preg_match($login_pattern, $login)) 
    {
        header('Location: login.php?error=login_format');
        exit;
    }

if ($login === 'student' && $password === 'php2025') 
    {
        $_SESSION['user_id'] = 1;

    if (!is_dir('users')) 
        {
            mkdir('users', 0755, true);
        }

    file_put_contents('users/1.txt', "logged_in=1\n");

    header('Location: profile.php');
    exit;
} else 
    {
        header('Location: login.php?error=invalid');
        exit;
    }