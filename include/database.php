<?php
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'bordi_db'; // Имя БД

    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);