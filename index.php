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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>bordi</title>
</head>

<body>
    
    <?php require "blocks/header.php" ?>

    <!-- обьявление -->     
    <div class="container mt-5">
        <h3 class="mb-5">All ads</h3>
        <div class="d-flex flex-wrap">
        
         <?php foreach ($ads as $ad) : ?>
        <div class="card mb-2 shadow-sm mx-3 col-lg-3  ">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?= $ad['name'];?></h4>
          </div>
          <div class="card-body ">
            <h6 class="card-title pricing-card-title" >Категория: <?= $ad['category'];?> <small class="text-muted"><?php $name?></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <img src="<?= $ad['image']?>.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="#">
            </ul>
            <h5 class="card-title pricing-card-price">Цена: <?= $ad['price'];?> <small class="font-weight-light"></small></h1>
            <h5 class="card-title pricing-card-footer">Автор: <?= $ad['user'];?> <small class="text-muted"></small></h1>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Перейти к обьявлению</button>
          </div>
        </div>
        <?php endforeach ?>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>