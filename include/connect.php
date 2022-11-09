<?php
    // Параметры для подключения
    $db_host = "127.0.0.1:3308"; 
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'bordi_db'; // Имя БД

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_base;charset=utf8", $db_user, $db_password);
    }catch(PDOException $i){
        die("Ошибка подключения к базе данных");
    }
?>