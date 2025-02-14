<div class="standard__blog__post">
    <div class="standard__blog__thumb">
        <a href="{{ route('blog.show',$blog->slug) }}"><img src="{{ asset($blog->image) }}" alt=""></a>
        <a href="{{ route('blog.show',$blog->slug) }}" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
    </div>
    <div class="standard__blog__content">
        <div class="blog__post__avatar">
            <span class="post__by">By : <a href="#">{{ $blog->author }}</a></span>
        </div>
        <h2 class="title"><a href="{{ route('blog.show',$blog->slug) }}">{{ $blog->title }}</a></h2>
        <p>{{ $blog->excerpt }}</p>
        <ul class="blog__post__meta">
            <li><i class="fal fa-calendar-alt"></i> {{ $blog->created_at->diffForHumans() }}</li>
        </ul>
    </div>
</div>
