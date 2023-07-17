@include('header')

<h1>Добро пожаловать!</h1>
<div>Уже зарегистрированы? <a class="a" href="{{'authorization'}}">Войдите в аккаунт</a></div>

<section class="container">
    <div class="button-menu">
        <button class="button buttons" onclick="showForm(event, 'patient')">Я пациент</button>
        <button class="outlined-button buttons" onclick="showForm(event, 'doctor')">Я врач</button>
    </div>
    <div class="line"></div>
    <form class="register patient-form forms" action="{{route('registration')}}" method="post">
        @csrf
        <div class="explain-text">
            <p>Сюда вставить текст, поясняющий, зачем пользователю заполнять ту или иную информацию</p>
            <p>Чтобы зарегистрироваться, пожалуйста, заполните все поля.</p>
        </div>
        <x-errors/>
        <div>
            <h3>Пользовательская информация</h3>
            <div class="about-you">
                <input type="text" placeholder="Ваш E-mail" name="email">
                <input type="password" placeholder="Введите пароль" name="password">
            </div>
        </div>

        <div>
            <h3>О вас</h3>
            <div class="about-you">
                <input type="text" name="first_name" placeholder="Ваше имя">
                <input type="text" name="second_name" placeholder="Ваша фамилия">
                <input type="date" name="date_of_birthday" title="Дата вашего рождения">
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
        <div class="consent">
            <input type="checkbox" id="consent">
            <label for="consent">Согласие с <a href="#" class="a">политикой конфиденциальности</a></label>
        </div>
        <div class="input-container">
            <input type="submit" value="Зарегистрироваться" class="button">
        </div>
    </form>


    <form class="register doctor-form forms hidden" action="{{route('doctor_registration')}}" method="post">
        @csrf
        <div class="explain-text">
            <p>Сюда вставить текст, поясняющий, зачем пользователю заполнять ту или иную информацию</p>
            <p>Чтобы зарегистрироваться, пожалуйста, заполните все поля.</p>
        </div>

        <div>
            <h3>Пользовательская информация</h3>
            <div class="about-you">
                <input type="text" placeholder="Ваш E-mail" name="email">
                <input type="password" placeholder="Введите пароль" name="password">

            </div>
        </div>

        <div>
            <h3>О вас</h3>
            <div class="about-you">
                <input type="text" placeholder="Ваше имя" name="first_name">

                <input type="text" name="second_name" placeholder="Ваша фамилия">

                <input type="date" name="date_of_birthday" title="Дата вашего рождения">
            </div>
            <h3>О спецификации</h3>
            <p> Пожалуйста, загрузите свои сертификаты, чтобы мы удостоверились, что вы действительно врач.</p>
            <div class="about-disease">
                <input type="file" name="certificate" multiple accept="image/*,image/jpeg">
            </div>
        </div>
        <div class="consent">
            <input type="checkbox" name="" id="consent">
            <label for="consent">Согласие с <a href="#" class="a">политикой конфиденциальности</a></label>
        </div>
        <div class="input-container">
            <input type="submit" value="Зарегистрироваться" class="button"></div>
        </div>
    </form>
</section>

<script>
    function showForm(event, current) {
        let forms = $('.forms'), buttons = $('.buttons');
        for (let i = 0; i < forms.length; i++) {
            $(forms[i]).addClass('hidden');
        }
        for (let i = 0; i < buttons.length; i++) {
            $(buttons[i]).addClass('outlined-button');
            $(buttons[i]).removeClass('button');
        }
        $(event.target).addClass('button');
        $(event.target).removeClass('outlined-button');
        $(`.${current}-form`).removeClass('hidden');
    }
</script>
