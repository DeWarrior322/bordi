<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body class="text-center">
    
<main class="form-signin container-fluid col-md-3 mt-5">

  <form action ="user.php" method="POST">
    <img class="mb-4" src="images/Logo.png" alt="" width="150" height="120">
    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

    <div class="form-floating mb-2">
      <input type="name" name="userFIO" class="form-control" id="floatingInput" placeholder="FIO">
      <label for="floatingInput">ФИО</label>
    </div>

    <div class="form-floating mb-2">
      <input type="email" name="userEmail" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Электронная почта</label>
    </div>

    <div class="form-floating mb-2">
      <input type="number" class="form-control" id="floatingInput" placeholder="phoneNumber">
      <label for="floatingInput">Номер телефона</label>
    </div>
    <div class="form-floating mb-2">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>

    
    <button class="w-60 btn btn-lg btn-primary" type="submit">Создать аккаунт</button>
  </form>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>