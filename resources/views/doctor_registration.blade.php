@include('header')

<h1>Добро пожаловать!</h1>
<div>Уже зарегистрированы? <a class="a" href="{{'authorization'}}">Войдите в аккаунт</a></div>

<section class="container">
    <a href="{{ route('registration') }}" style="">Я пациент</a>
    <div class="line"></div>
    <form class="register" action="{{route('doctor_registration')}}" method="post">
        @csrf

        <div class="explain-text">
            <p>Если вы врач с опытом работы и хотите помочь больным диабетом, пожалуйста, зарегистрируйтесь</p>
            <p>Чтобы зарегистрироваться, пожалуйста, заполните все поля.</p>
        </div>

        <div>
            <h3>О вас</h3>
            <x-errors />
            <div class="about-you">

                <input type="text" placeholder="Ваше имя" name="first_name">

                <input type="text" name="second_name" placeholder="Ваша фамилия">

                <input type="date" name="date_of_birthday" title="Дата вашего рождения">
                <input type="text" placeholder="Ваш E-mail" name="email">

                <input type="password" placeholder="Введите пароль" name="password">

                <input type="password" placeholder="Повторите пароль" name="password-rpt">
                <hr>
            </div>
        </div>

        <div>
            <h3>О спецификации</h3>
            <p> Пожалуйста, загрузите свои сертификаты, чтобы мы удостоверились, что вы действительно врач.</p>
            <div class="about-disease">
               <input type="file" name="certificate" multiple accept="image/*,image/jpeg">
            </div>
        </div>
        <div class="input-container">
            <input type="submit" value="Зарегистрироваться" class="button"></div>
    </form>
</section>
