@include('header')
@php
    session_start();

@endphp

<div class="account-header">
    @if(isset($_SESSION['avatar'])&&$_SESSION['avatar']!=null)
        <img src="{{$_SESSION['avatar']}}" alt="">
    @else
        <img src="images/null_avatar.png" alt="">
    @endif
    <div>
        <h1>{{ $_SESSION['first_name'] }}
            {{ $_SESSION['second_name'] }}
        </h1>
        Пациент
    </div>
</div>

<section class="container">
    <div class="button-menu">
        <button class="button buttons" onclick="showContainer(event, 'main')">Основное</button>
        <button class="outlined-button buttons" onclick="showContainer(event, 'chat')">Сообщения</button>
        <button class="outlined-button buttons" onclick="showContainer(event, 'diary')">Дневник диабета</button>
    </div>

    <div class="line"></div>

    <div class="main-container containers">
        <h3>Изменение информации</h3>
        <form class="main-settings">
            <div>
                <div class="main-avatar">Аватар</div>
                <input type="file">
            </div>

            <div>
                <div>Имя пользователя</div>
                <input type="text" value="{{ $_SESSION['first_name'] }}">
            </div>
            <div>
                <div>Фамилия пользователя</div>
                <input type="text" value="{{ $_SESSION['second_name'] }}">
            </div>

            <div>
                <div>Электронная почта</div>
                <input type="text" value="{{$_SESSION['email']}}">
            </div>

            <div>
                <div>Страна, где вы живёте</div>

                <input type="text" value="{{$_SESSION['geolocation'] }}">
            </div>

            <div>
                <div>Дата рождения</div>
                <input type="date" value="{{$_SESSION['date_of_birthday']}}">
            </div>

            <div>
                <div>Тип диабета</div>
                <select>
                    @if(isset($_SESSION['type_of_diabetes']))
                        <option selected>{{$_SESSION['type_of_diabetes']}}</option>
                        <option value="1">Первый</option>
                        <option value="2">Второй</option>
                    @endif
                </select>
            </div>

            <div>
                <div>Дата заболевания</div>
                <input type="date" value="{{ $_SESSION['date_of_illness'] }}">
            </div>

            <div>
                <div>Пароль</div>
                <input type="password" placeholder="Старый пароль">
                <input type="password" placeholder="Новый пароль">
            </div>

            <div class="union"><input type="submit" value="Сохранить" class="button"></div>
        </form>
    </div>
    <div class="chat-container containers hidden">
        <div class="chat-list">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input class="search-input" type="text" placeholder="Поиск">
            </div>

            <button class="chat-preview active-chat" onclick="showChat(event, 'id1')">
                <img class="preview-avatar" src="images/doctor.png">
                <div class="preview-body">
                    <div>Доктор Врач</div>
                    <div>Вы: Спасибо большое! Благо...</div>
                </div>
            </button>
            <button class="chat-preview" onclick="showChat(event, 'id2')">
                <img class="preview-avatar" src="images/doctor.png">
                <div class="preview-body">
                    <div>Второй Врач</div>
                    <div>Вы: Спасибо большое! Благо...</div>
                </div>
            </button>
            <button class="chat-preview" onclick="showChat(event, 'id3')">
                <img class="preview-avatar" src="images/doctor.png">
                <div class="preview-body">
                    <div>Пользователь</div>
                    <div>Вы: Спасибо большое! Благо...</div>
                </div>
            </button>
        </div>
        <div class="vertical-line"></div>


        <div class="chat" id="id1-chat">
            <div class="chat-header">
                <img src="images/doctor.png">
                <h3>Доктор Врач</h3>
            </div>
            <div class="chat-content">
                <div class="chat-date">20 июля</div>
                <div class="message left">
                    <div class="left-message">У вас всё замечательно получается, продолжайте в том же духе!</div>
                </div>
                <div class="message right">
                    <div class="right-message">Спасибо большое, благодаря вам мне действительно гораздо легче. Жизнь
                        наполняется красками
                    </div>
                </div>
            </div>
            <div class="chat-inputfield">
                <input type="text" placeholder="Напишите сообщение">
                <button class="button">Отправить</button>
            </div>
        </div>
        <div class="chat hidden" id="id2-chat">
            <div class="chat-header">
                <img src="images/doctor.png">
                <h3>Второй Врач</h3>
            </div>
            <div class="chat-content">
                <div class="chat-date">20 июля</div>
                <div class="message left">
                    <div class="left-message">У вас всё замечательно получается, продолжайте в том же духе!</div>
                </div>
                <div class="message right">
                    <div class="right-message">Спасибо большое, благодаря вам мне действительно гораздо легче. Жизнь
                        наполняется красками
                    </div>
                </div>
            </div>
            <div class="chat-inputfield">
                <input type="text" placeholder="Напишите сообщение">
                <button class="button">Отправить</button>
            </div>
        </div>
        <div class="chat hidden" id="id3-chat">
            <div class="chat-header">
                <img src="images/doctor.png">
                <h3>Пользователь</h3>
            </div>
            <div class="chat-content">
                <div class="chat-date">20 июля</div>
                <div class="message left">
                    <div class="left-message">У вас всё замечательно получается, продолжайте в том же духе!</div>
                </div>
                <div class="message right">
                    <div class="right-message">Спасибо большое, благодаря вам мне действительно гораздо легче. Жизнь
                        наполняется красками
                    </div>
                </div>
            </div>
            <div class="chat-inputfield">
                <input type="text" placeholder="Напишите сообщение">
                <button class="button">Отправить</button>
            </div>
        </div>
    </div>

    <div class="diary-container containers hidden">
        <h3>Пройдите короткий опрос для контроля самочувствия</h3>

        <form class="survey" action="" method="post">
            @csrf
            <div>
                <div>Какой у вас рост? (в сантиметрах)</div>
                <input name="height" type="number" min="100" max="300">
            </div>
            <div>
                <div>Какой у вас вес?</div>
                <input name="weight" type="number" min="10" max="1000">
            </div>
            <div>
                <div>Какое у вас на данный момент давление?</div>
                <input name="blood_pressure" type="text">
            </div>
            <div>
                <div>Какое у вас уровень глюкозы?</div>
                <input name="glucose_level" type="text">
            </div>
            <div>
                <div>Какой уровень холестирина у вас в крови?</div>
                <input name="cholesterol" type="text">
            </div>
            <div>
                <div>Оставить заполненную информацию приватной или сделать общедоступной?</div>
                <select name="isPrivate">
                    <option value="1">Приватная</option>
                    <option value="0">Общедоступная</option>
                </select>
            </div>
            <div><input type="submit" value="Сохранить результат" class="button"></div>
        </form>
    </div>
</section>

<script>
    function showContainer(event, current) {
        let containers = $('.containers'), buttons = $('.buttons');
        for (let i = 0; i < containers.length; i++) {
            $(containers[i]).addClass('hidden');
        }
        for (let i = 0; i < buttons.length; i++) {
            $(buttons[i]).addClass('outlined-button');
            $(buttons[i]).removeClass('button');
        }
        $(event.target).addClass('button');
        $(event.target).removeClass('outlined-button');
        $(`.${current}-container`).removeClass('hidden');
    }

    function showChat(event, current) {
        let chats = $('.chat'), buttons = $('.chat-preview');
        for (let i = 0; i < chats.length; i++) {
            $(chats[i]).addClass('hidden');
        }
        for (let i = 0; i < buttons.length; i++) {
            $(buttons[i]).removeClass('active-chat');
        }
        $(event.currentTarget).addClass('active-chat');
        $(`#${current}-chat`).removeClass('hidden');
    }
</script>
