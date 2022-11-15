<?php
  require_once 'include/connect.php';


?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<?php require "blocks/header.php" ?>
<body class="text-center">
    
<main class="form-signin container-fluid col-md-3 mt-5">
  <!-- Форма регистрации -->
  <form method="POST" action="">
    <img class="mb-4" src="images\Logotype.png" alt="" width="107" height="150">
    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

    <div class="form-floating mb-2">
      <input type="name" name="userName" class="form-control" id="floatingInput" placeholder="FIO">
      <label for="floatingInput">ФИО</label>
    </div>

    <div class="form-floating mb-2">
      <input type="email" name="userEmail" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Электронная почта</label>
    </div>

    <div class="form-floating mb-2">
      <input type="text" name="userPhone" class="form-control" id="floatingInput" placeholder="phoneNumber" value ="+7" maxlength="12">
      <label for="floatingInput">Номер телефона</label>
    </div>
    <div class="form-floating mb-2">
      <input type="password" name="userPassF" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>
    <div class="form-floating mb-2">
      <input type="password" name="userPassS" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Повторите пароль</label>
    </div>

    
    <button class="w-60 btn btn-lg btn-primary" name="button-reg" type="submit">Создать аккаунт</button>
  </form>

<?php
$db_table = "users"; // Имя Таблицы БД
   
  if (isset($_POST['userName']) && isset($_POST['userEmail'])){
    // Переменные с формы
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhone'];
    $passF = $_POST['userPassF'];
    $passS = $_POST['userPassS'];

    //Проверка на пустые поля
    if($name === '' || $email === '' || $phone === '' || $passF === '' || $passS === '')
    {
      echo "Заполните поля";
    }
    // Проверка на совпадение пароля
    elseif($passF !== $passS){
      echo "Пароли не совпадают";
    }
    else{
     
        try {
          // Собираем данные для запроса
          $data = array( 'name' => $name, 'email' => $email, 'phone' => $phone, 'pass' => $passF); 
          // Подготавливаем SQL-запрос
          $query = $pdo->prepare("INSERT INTO $db_table (name, email, phone, pass) values (:name, :email, :phone, :pass)");
          // Выполняем запрос с данными
          $query->execute($data);
          // Запишим в переменую, что запрос отработал
          $result = true;
          } catch (PDOException $e) {
          // Если есть ошибка соединения или выполнения запроса, выводим её
          print "Ошибка!: " . $e->getMessage() . "<br/>";
        }
        if ($result) {
          echo "Успех. Информация занесена в базу данных"; 
        }

      
    }  
  }
    
?>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>