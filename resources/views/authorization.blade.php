@include('header')

<h1>Войдите в аккаунт!</h1>
<div>Ещё нет аккаунта? <a href="{{route('registration')}}" class="a">Зарегистрироваться</a></div>

<section class="container">
    <div class="line"></div>

    <form class="register" action="{{route('authorization')}}" method="post">
        @csrf
        <div class="explain-text">
            <p>Вы заполняете эту информацию для того, чтобы врачам было удобнее и для всякого такого прочего. Текст
                придумаю потом.</p>
            <p>Войдите в свою учетную запись</p>
        </div>

        <div>
            <h3>О вас</h3>
            <x-errors />
            <div class="about-you">

                <input type="text" placeholder="Ваш E-mail" name="email">

                <input type="password" placeholder="Введите пароль" name="password">

                <hr>
            </div>
        </div>
        <div class="remember-me">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Запомните меня</label>
        </div>
        <div class="input-container">
            <input type="submit" value="Войти" class="button"></div>
    </form>
</section>
