<?php

session_start();

if (file_exists('users/1.txt')) 
    {
        unlink('users/1.txt');
    }

$_SESSION = [];
session_destroy();

header('Location: login.php');
exit;