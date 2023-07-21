@include('header')
<section class="welcome">
    <div class="welcome-description">
        <h1>Социальная сеть для больных диабетом и неравнодушных врачей</h1>
        <div>Какой-то текст о том, что заболевание поддаётся контролю и на нашем сайте вам помогут профессиональные врачи.</div>
        <form action="{{route('registration')}}">
        <button class="button">Зарегистрироваться</button>
        </form>
    </div>
    <div class="welcome-logo">DiaLife</div>
</section>

<div class="lineh">
    <h4>Здесь вы сможете...</h4>
    <div class="line"></div>
</div>

<section class="opportunities">
    <div class="opportunity">
        <div>
            <div class="opportunity-number">01</div>
            <div class="opportunity-text">узнать много нового...</div>
        </div>
        <div class="opportunity-image"><img src="/images/main_page/opportunity1.svg" alt=""></div></div>
    <div class="opportunity">
        <div>
            <div class="opportunity-number">02</div>
            <div class="opportunity-text">найти поддержку...</div>
        </div>
        <div class="opportunity-image"><img src="/images/main_page/opportunity2.svg" alt=""></div></div>
    <div class="opportunity">
        <div>
            <div class="opportunity-number">03</div>
            <div class="opportunity-text">следить за здоровьем...</div>
        </div>
        <div class="opportunity-image"><img src="/images/main_page/opportunity3.svg" alt=""></div>
    </div>
</section>
<button class="button">Зарегистрироваться</button>

