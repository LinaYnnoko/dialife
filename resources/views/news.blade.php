@include('header')
<section class="articles-header">

    <h1>Статьи</h1>
    @if(Auth::check())
        <form action="{{'post_news'}}">
            <button class="button" style="position: relative; left: 108% !important;">Добавить публикацию</button>
        </form>
    @endif
    <div class="line"></div>
</section>

<section class="articles">
    @foreach($news as $new)
        <a class="small-article">
            <img src="{{ $new->image }}" alt="" class="small-cover">
            <div class="small-title">{{ $new -> title }}</div>
            <div class="small-datetime">{{ $new -> created_at }}</div>
        </a>
    @endforeach
</section>
