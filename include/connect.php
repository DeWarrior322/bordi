<?php
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'bordi_db'; // Имя БД
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_base;charset=utf8", $db_user, $db_password, $options);
    }catch(PDOException $i){
        die("Ошибка подключения к базе данных");

    }
?>