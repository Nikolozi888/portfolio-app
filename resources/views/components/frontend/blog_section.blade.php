<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            @foreach ($blogs as $blog)
                <x-frontend.blog_card :blog="$blog" />
            @endforeach
        </div>
        <div class="blog__button text-center">
            <a href="{{ route('blog.index') }}" class="btn">more blog</a>
        </div>
    </div>
</section>
