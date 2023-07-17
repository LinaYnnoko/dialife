@include('header')

<h1>Добро пожаловать!</h1>
<div>Уже зарегистрированы? <a class="a" href="{{'authorization'}}">Войдите в аккаунт</a></div>

<section class="container">
    <a href="{{ route('doctor_registration') }}">Я врач</a>
    <div class="line"></div>
    <form class="register" action="{{route('registration')}}" method="post">
        @csrf
        <div class="explain-text">
            <p>Вы заполняете эту информацию для того, чтобы врачам было удобнее и для всякого такого прочего. Текст
                придумаю потом.</p>
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

                <input type="password" placeholder="Повторите пароль" name="password">
                <hr>
            </div>
        </div>

        <div>
            <h3>О заболевании</h3>
            <div class="about-disease">
                <select name="type_of_diabetes">
                    <option value="0">Тип диабета</option>
                    <option value="1">Первый</option>
                    <option value="2">Второй</option>
                </select>
                <input name="date_of_illness" type="date" title="Год вашего заболевания">
            </div>
        </div>
        <div class="input-container">
            <input type="submit" value="Зарегистрироваться" class="button"></div>
    </form>
</section>
