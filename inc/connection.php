<?php
    $dsn = 'mysql:host=localhost;dbname=fbchat';
    $username = 'root';
    $password = '';

    try {
        $con = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('inc/error.php');
        exit();
    }
?>