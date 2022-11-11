<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">bordi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Панель навигации -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Главная</a>
        </li>
         <!-- Выпадающий список категорий -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Категории
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#" >Авто</a></li>
            <li><a class="dropdown-item" href="#">Недвижимость</a></li>
            <li><a class="dropdown-item" href="#">Услуги</a></li>
            <li><a class="dropdown-item" href="#">Вещи для дома</a></li>
            <li><a class="dropdown-item" href="#">Электроника</a></li>
            
          </ul>
        </li>
        <!-- Поисковая строка -->
        <li>
        <form class="d-flex" role="search">
        <input class="form-control me-4 flex-nowrap "  type="search" placeholder="Поиск по обьявлениям" aria-label="Search">
        <button class="btn btn-primary " type="submit">Поиск</button>
      </form>
        </li>
      </ul>
       <!-- Кнопки авторизации/регистрации -->
      <form class="d-flex" role="authorize">
      <div class="d-grid gap-2 d-md-block">
        <a href="./register.php"><button class="btn btn-primary" type="button">Регистрация</button></a>
        <a href="./authorize.php"><button class="btn btn-primary" type="button">Вход</button></a>
      </div>

      
        
      </form>
     
    </div>
  </div>
</nav>
