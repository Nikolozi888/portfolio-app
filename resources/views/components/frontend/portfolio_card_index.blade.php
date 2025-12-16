<div class="portfolio__inner__item grid-item cat-two cat-three">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-6 col-md-10">
            <div class="portfolio__inner__thumb">
                <a href={{ route('portfolio.show', $card->id) }}>
                    <img src="{{ get_image($card->image) }}" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-10">
            <div class="portfolio__inner__content">
                <h2 class="title"><a href={{ route('portfolio.show', $card->id) }}>{{ $card->title }}</a></h2>
                <p>{!! $card->description !!}</p>
                <a href={{ route('portfolio.show', $card->id) }} class="link">View Case Study</a>
            </div>
        </div>
    </div>
</div>