@props(['recent_blog'])

<li class="rc__post__item">
    <div class="rc__post__thumb">
        <a href="{{ route('blog.show', $recent_blog->slug) }}">
            <img src="{{ get_image($recent_blog->image) }}" alt="">
        </a>
    </div>
    <div class="rc__post__content">
        <h5 class="title">
            <a href="{{ route('blog.show', $recent_blog->slug) }}">{{ $recent_blog->title }}</a>
        </h5>
        <span class="post-date"><i class="fal fa-calendar-alt"></i>
            {{ $recent_blog->created_at->diffForHumans() }}</span>
    </div>
</li>