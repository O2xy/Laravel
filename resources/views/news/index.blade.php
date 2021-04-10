@extends('layouts.main')

@section('content')
    @forelse ($newsList as $key => $news)
        <article class="masonry__brick entry format-standard animate-this">

            <div class="entry__thumb">
                <a href="{{ route('news.show', ['id' => ++$key]) }}" class="entry__thumb-link">
                    <img src="{{asset('assets/images/thumbs/masonry/tulips-600.jpg')}}"
                         srcset="{{asset('assets/images/thumbs/masonry/tulips-600.jpg')}} 1x, {{asset('assets/images/thumbs/masonry/tulips-1200.jpg')}} 2x" alt="">
                </a>
            </div>

            <div class="entry__text">
                <div class="entry__header">
                    <h2 class="entry__title"><a href="{{ route('news.show', ['id' => ++$key]) }}">{{$news}}</a></h2>
                    <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="#">Категория новости</a>
                                    </span>
                        <span class="entry__meta-date">
                                        <a href="single-standard.html">Дата публикации</a>
                                    </span>
                    </div>
                </div>
                <div class="entry__excerpt">
                    <p>
                        Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                    </p>
                </div>
            </div>

        </article> <!-- end article -->

    @empty
        <h2>Новостей нет</h2>
    @endforelse
@endsection

