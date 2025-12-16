<div class="col-lg-4 col-md-6 col-sm-9">
    <div class="blog__post__item">
        <div class="blog__post__thumb">
            <a href="{{ route('blog.show', $blog->slug) }}"><img src="{{ get_image($blog->image) }}" alt=""></a>
            <div class="blog__post__tags">
                <a href="{{ route('tags.index', $blog->tag->slug) }}">{{ $blog->tag->name }}</a>
            </div>
        </div>
        <div class="blog__post__content">
            <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
            <h3 class="title"><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
            <a href="{{ route('blog.show', $blog->slug) }}" class="read__more">Read more</a>
        </div>
    </div>
</div>