<?php require_once ("include/connect.php"); ?>


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

<main class="form-signin container-fluid col-md-3 mt-5">
  <!-- Форма регистрации -->
  <form method="POST" action="" enctype="multipart/form-data">
  <div class="form-floating mb-2">
      <input type="name" name="name" class="form-control" id="floatingInput" placeholder="FIO">
      <label for="floatingInput">ФИО</label>
    </div>
    <label for="floatingInput">Добавить фото</label>
    <div class="form-floating mb-2">
  <input class="form-control" type="file" name="image" id="formFile">
    </div>
    <button class="w-60 btn btn-lg btn-primary" name="btn_sub" type="submit">Загрузить</button>
  </form>



  <?php 
  global $pdo;
  $db_table ="ads";
  
  $name = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];

  move_uploaded_file($tmp_name, "upload/" .$name);

  $image_name = "upload/" .$name;



    //Проверка на пустые поля

    $stmt = $pdo->prepare ("INSERT INTO ads (name, image_name) VALUES (:name, :image_name)");
    $stmt -> bindParam(':name', $name);
    $stmt -> bindParam(':image', $image_name);
    $stmt -> execute();
      
    

  ?>
    
</body>
</html>