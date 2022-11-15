<?php
require_once ("include/connect.php");

  global $pdo;
  $stmt = $pdo->query('SELECT * FROM ads');
  $ads = $stmt->fetchAll();
  $ad = $stmt->fetch();
  
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php require "blocks/header.php" ?>

<div class="row mx-1">
  <div class="col-lg-2">
    <h3>Имя Фамилия</h3>
    <img class="rounded-circle" width="120px" height="120px" src="images/horosh.jpg"  alt="">
  </div>
  <div class="col-5">
    <h3>Ваши обьявления</h3>
    <div class="contaner mt-5">
        <div class="d-flex flex-wrap">
            <div class="card mb-2 shadow-sm mx-3 col-lg-5">
                <div class="card body">
                <h6 class="card-title pricing-card-title" >Хотите создать новое обьявление? <small class="text-muted"><?php $name?></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <img src="images/no_image.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="#">
                </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Создать обьявление</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>