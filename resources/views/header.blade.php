<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiaLife</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/52ba0111cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/variables.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/interface.css">
</head>
<body>
<header>
    <a href="{{route('welcome')}}"><img src="/images/logo.svg" alt=""></a>
    <ul class="menu">
        <li>
            Новости
            <img src="/images/arrow.svg" class="arrow">
        </li>
        <li>
            Школа диабета
            <img src="/images/arrow.svg" class="arrow">
        </li>
        <li>
            Дневник диабета
        </li>
    </ul>
    <div class="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input class="search-input" type="text" placeholder="Поиск">
    </div>
    <div class="buttons">
        <a href="{{ route('registration') }}" class="text-button">Регистрация</a>
        <form action="{{route('authorization')}}">
        <button class="button">Вход</button>
        </form>
    </div>
</header>
