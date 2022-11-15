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
  <input class="form-control" type="file" name="img" id="formFile">
    </div>
    <button class="w-60 btn btn-lg btn-primary" name="btn_sub" type="submit">Загрузить</button>
  </form>



  <?php 

  $db_table ="images";
  $name = $_FILES['img']['name'];
  $tmp_name = $_FILES['img']['tmp_name'];

  move_uploaded_file($tmp_name, "upload/" .$name);
  $db_name = "upload/".$name;



  if (isset($_POST['name']) && isset($_POST['image'])){
    // Переменные с формы
    $namea = $_POST['name'];
    $image = $_POST['img'];
    

    try {

        $data = array( 'name' => $namea, 'image' => $image ); 
        // Подготавливаем SQL-запрос
        $query = $pdo->prepare("INSERT INTO $db_table (namea, img) values (:name, :img)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
    	echo "Успех. Информация занесена в базу данных";
    }
}

  ?>
    
</body>
</html>