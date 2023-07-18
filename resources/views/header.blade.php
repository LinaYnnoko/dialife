<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiaLife</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/52ba0111cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/interface.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
<header>
    <a href="{{ route('welcome') }}"><img src="images/logo.svg" alt=""></a>
    <ul class="menu">
        <li>
            <a>Новости <img src="images/arrow.svg" class="arrow"></a>
            <ul class="submenu">
                <li class="hidden-li">fgdf</li>
                <li><a href="#">Публикации</a></li>
                <li><a href="#">Новости в мире диабета</a></li>
                <li><a href="#">Новости науки</a></li>
            </ul>
        </li>
        <li>
            <a>Школа диабета <img src="images/arrow.svg" class="arrow"></a>
            <ul class="submenu">
                <li class="hidden-li">fgdf</li>
                <li><a href="#">Уроки</a></li>
                <li><a href="#">Книги</a></li>
                <li><a href="#">Ролики</a></li>
                <li><a href="#">Право</a></li>
            </ul>
        </li>
        <li>
            @auth
                <a href="{{ route('cabinet') }}">Дневник диабета</a>
            @endauth
        </li>
    </ul>
    <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input class="search-input" type="text" placeholder="Поиск">
    </div>
    <div class="account-buttons">
        <a href="{{route('registration')}}" class="text-button">Регистрация</a>
        <form action="{{'authorization'}}">
        <button class="button">Вход</button>
        </form>
    </div>
</header>
