<div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="{{ asset('storage/' . $portfolio->image) }}"
            alt="Portfolio image">
    </div>
    <div class="portfolio__overlay__content">
        <span>{{ $portfolio->category }}</span>
        <h4 class="title"><a href={{ route('portfolio.show',$portfolio->id) }}>{{ $portfolio->title }}</a></h4>
        <a href={{ route('portfolio.show',$portfolio->id) }} class="link">Case Study</a>
    </div>
</div>
