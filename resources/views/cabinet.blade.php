@include('header')
@php
    session_start();

 @endphp


<div class="account-header">
    <img src="/images/woman.png" alt="">
    <div>
        <h1>{{ $_SESSION['first_name'] }}
            {{ $_SESSION['second_name'] }}
        </h1>
    Пациент
    </div>
</div>

<section class="container">
    <div class="line"></div>

    <div class="chat-container">
        <div class="chat-list">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input class="search-input" type="text" placeholder="Поиск">
            </div>

            <div class="chat-preview">
                <img class="preview-avatar" src="images/doctor.png">
                <div class="preview-body">
                    <div>Доктор Врач</div>
                    <div>Вы: Спасибо большое! Благо...</div>
                </div>
            </div>
            <div class="chat-preview">
                <img class="preview-avatar" src="images/doctor.png">
                <div class="preview-body">
                    <div>Доктор Врач</div>
                    <div>Вы: Спасибо большое! Благо...</div>
                </div>
            </div>
            <div class="chat-preview">
                <img class="preview-avatar" src="images/doctor.png">
                <div class="preview-body">
                    <div>Доктор Врач</div>
                    <div>Вы: Спасибо большое! Благо...</div>
                </div>
            </div>
        </div>
        <div class="vertical-line"></div>


        <div class="chat">
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
                    <div class="right-message">Спасибо большое, благодаря вам мне действительно гораздо легче. Жизнь наполняется красками</div>
                </div>
            </div>
            <div class="chat-inputfield">
                <input type="text" placeholder="Напишите сообщение">
                <button class="button">Отправить</button>
            </div>
        </div>
    </div>
</section>

