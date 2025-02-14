@extends('layouts.user_layout')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Single Article</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->


    <!-- blog-details-area -->
    <section class="standard__blog blog__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <img src="{{ asset($blog->image) }}" alt="">
                        </div>
                        <div class="blog__details__content services__details__content">
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i> {{ $blog->created_at->diffForHumans() }}</li>
                            </ul>
                            <h2 class="title">{{ $blog->title }}</h2>
                            <p>{!! $blog->description !!}</p>
                        </div>
                        <div class="blog__details__bottom">
                            <ul class="blog__details__tag">
                                <li class="title">Tag:</li>
                                <li class="tags-list">
                                    {{ $blog->tag->name }}
                                </li>
                            </ul>

                        </div>
                        <div class="blog__next__prev">
                            <div class="row justify-content-between">
                                @if ($previous)
                                    <div class="col-xl-5 col-md-6">
                                        <div class="blog__next__prev__item">
                                            <h4 class="title">Previous Post</h4>
                                            <div class="blog__next__prev__post">
                                                <div class="blog__next__prev__thumb">
                                                    <a href="{{ route('blog.show', $previous->slug) }}">
                                                        <img src="{{ asset($previous->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="blog__next__prev__content">
                                                    <h5 class="title">
                                                        <a
                                                            href="{{ route('blog.show', $previous->slug) }}">{{ $previous->title }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($next)
                                    <div class="col-xl-5 col-md-6">
                                        <div class="blog__next__prev__item next_post text-end">
                                            <h4 class="title">Next Post</h4>
                                            <div class="blog__next__prev__post">
                                                <div class="blog__next__prev__thumb">
                                                    <a href="{{ route('blog.show', $next->slug) }}">
                                                        <img src="{{ asset($next->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="blog__next__prev__content">
                                                    <h5 class="title">
                                                        <a
                                                            href="{{ route('blog.show', $next->slug) }}">{{ $next->title }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">

                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">
                                @foreach ($blogs as $recent_blog)
                                   <x-frontend.small_post_card :recent_blog="$recent_blog" />
                                @endforeach

                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                @foreach ($categories as $category)
                                    <li class="sidebar__cat__item"><a href="blog.html">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Popular Tags</h4>
                            <ul class="sidebar__tags">
                                @foreach ($tags as $tag)
                                    <li><a href="blog.html">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->


    <!-- contact-area -->
    <x-frontend.contact_section />
    <!-- contact-area-end -->
@endsection
