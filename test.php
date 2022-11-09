<?php 
require 'include/database.php';

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function selectAll($table){
    global $pdo;
    $sql = "SELECT * FROM ads";
    $query = $pdo->prepare($sql);
    $query->execute();

    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
}



$date = $query->fetch();

tt($date);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>