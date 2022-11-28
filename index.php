<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
require_once ("include/connect.php");

  global $pdo;
  $stmt = $pdo->query('SELECT * FROM ads');
  $ads = $stmt->fetchAll();
  $ad = $stmt->fetch();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>bordi</title>
</head>

<body>
    
    <?php require "blocks/header.php" ?>

    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary mx-2">Главная</a></li>
          <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Категории
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Авто</a></li>
          <li><a class="dropdown-item" href="#">Недвижимость</a></li>
          <li><a class="dropdown-item" href="#">Услуги</a></li>
          <li><a class="dropdown-item" href="#">Электроника</a></li>
          <li><a class="dropdown-item" href="#">Растения</a></li>
          <li><a class="dropdown-item" href="#">Животные</a></li>
      </ul>
      </div>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
      
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">  <a class="nav-link" href="register.php">Регистрация</a> </button>
          <button type="button" class="btn btn-warning"><a class="nav-link" href="authorize.php">Войти</a> </button>
        </div>
      </div>
    </div>
  </header>

    <!-- обьявление -->     
    <div class="container mt-5">
        <h3 class="mb-5 mx-3">Все обьявления</h3>
        <div class="d-flex flex-wrap">
        
         <?php foreach ($ads as $ad) : ?>
        <div class="card mb-4 shadow-sm mx-3 col-lg-3  ">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?= $ad['name'];?></h4>
          </div>
          <div class="card-body ">
            <h6 class="card-title pricing-card-title" >Категория: <?= $ad['category'];?> <small class="text-muted"><?php $name?></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <img src="upload/<?= $ad['image']?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="#">
            </ul>
            <h5 class="card-title pricing-card-price">Цена: <?= $ad['price'];?>  ₽ <small class="font-weight-light"></small></h1>
            <h5 class="card-title pricing-card-footer">Автор: <?= $ad['user'];?> <small class="text-muted"></small></h1>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Перейти к обьявлению</button>
          </div>
        </div>
        <?php endforeach ?>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script></body>
</html>