<?php
  require_once 'include/database.php';
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
    <?php
    $db_table = "ads"; // Имя Таблицы БД
    try {
      // Устанавливаем корректную кодировку
      $db->exec("set names utf8");
      // Собираем данные для запроса
      $data = array( 'name' => $name, 'email' => $email, 'phone' => $phone, 'pass' => $passF); 
      // Подготавливаем SQL-запрос
      $query = $db->prepare("SELECT * $db_table (name, image, user) values (:name, :email, :phone, :pass)");
      // Выполняем запрос с данными
      $query->execute($data);
      // Запишим в переменую, что запрос отработал
      $result = true;
      } catch (PDOException $e) {
      // Если есть ошибка соединения или выполнения запроса, выводим её
      print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
  
    ?>
    <div class="container mt-5">
        <h3 class="mb-5">All ads</h3>
        <div class="d-flex flex-wrap"> 
        <?php
        for($i = 0; $i < $rowsCount; $i++):
        ?>
        <div class="card mb-3 shadow-sm mx-2 col-lg-3 ">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">100</h4>
          </div>
          <div class="card-body ">
            <h1 class="card-title pricing-card-title"><?php echo ($i + 1) ?> <small class="text-muted"><?php $name?></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <img src="images/<?php echo ($i + 1) ?>.jpg" class="img-thumbrail" alt="#">
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Перейти к обьявлению</button>
          </div>
        </div>
        <?php endfor; ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>