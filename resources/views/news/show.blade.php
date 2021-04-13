@extends('layouts.main')

@section('content')

    <!-- site content
        ================================================== -->
    <div class="s-content content">
        <main class="row content__page">

            <article class="column large-full entry format-standard">

                <div class="media-wrap entry__media">
                    <div class="entry__post-thumb">
                        <img src="{{asset('assets/images/thumbs/single/standard/standard-1000.jpg')}}"
                             srcset="{{asset('assets/images/thumbs/single/standard/standard-2000.jpg')}} 2000w,
                                         {{asset('assets/images/thumbs/single/standard/standard-1000.jpg')}} 1000w,
                                         {{asset('assets/images/thumbs/single/standard/standard-500.jpg')}} 500w" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                    </div>
                </div>

                <div class="content__page-header entry__header">
                    <h1 class="display-1 entry__title">
                        Новость с ID = {{$news}}
                    </h1>
                    <ul class="entry__header-meta">
                        <li class="author">By <a href="#0">Автор новости</a></li>
                        <li class="date">Дата публикации</li>
                        <li class="cat-links">
                            <a href="#0">Категории</a>
                        </li>
                    </ul>
                </div> <!-- end entry__header -->

                <div class="entry__content">

                    <p class="lead drop-cap">
                        Duis ex ad cupidatat tempor Excepteur cillum cupidatat
                        fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation
                        incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor
                        dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui
                        labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua
                        ea nisi sint.
                    </p>

                    <p>
                        Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat
                        dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit
                        id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit
                        nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam
                        consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut
                        dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim
                        veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim
                        aliqua laborum mollit quis nostrud sed sed.
                    </p>

                    <p>
                        <img src="images/wheel-1000.jpg"
                             srcset="images/wheel-2000.jpg 2000w,
                                     images/wheel-1000.jpg 1000w,
                                     images/wheel-500.jpg 500w"
                             sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                    </p>
                </div> <!-- end entry content -->

                <div class="entry__pagenav">
                    <div class="entry__nav">
                        <div class="entry__prev">
                            <a href="{{ route('news.show', ['id' => --$news]) }}" rel="prev">
                                <span>Previous Post</span>
                                Tips on Minimalist Design
                            </a>
                        </div>
                        <div class="entry__next">
                            <a href="{{ route('news.show', ['id' => $news + 2]) }}" rel="next">
                                <span>Next Post</span>
                                Less Is More
                            </a>
                        </div>
                    </div>
                </div> <!-- end entry__pagenav -->

            </article> <!-- end column large-full entry-->

        </main>

    </div> <!-- end s-content -->

    <x-site-footer></x-site-footer>

@endsection
