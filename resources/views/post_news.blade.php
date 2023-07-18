@include('header')

<h1> Создать публикацию</h1>

<section class="container">
    <div class="line"></div>
    <form class="register patient-form forms" action="{{route('post_news')}}" method="post">
        @csrf
        <div>
            <h3>Название публикации</h3>
            <div class="about-you">
                <input type="text" placeholder="Название" name="title">
            </div>
        </div>

        <div>
            <h3>Текст публикации</h3>
            <div class="about-you">
               <textarea name="description" placeholder="Текст публикации"></textarea>
            </div>
        </div>
        <div>
            <h3>Картинки к публикации</h3>
            <div class="about-disease">
                <input name="image" type="file">
            </div>
        </div>
        <div class="input-container">
            <input type="submit" value="Опубликовать" class="button">
        </div>
    </form>
</section>

