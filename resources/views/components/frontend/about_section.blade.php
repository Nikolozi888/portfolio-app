<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach (explode(',', $about->images) as $image)
                        <li class="now-in-view">
                            <img class="light" src="{{ asset('storage/' . $image) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{{ $about->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('Frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{!! $about->experience !!}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $about->excerpt }}</p>
                    <a href="{{ route('about') }}" class="btn">More About Me</a>
                </div>
            </div>
        </div>
    </div>
</section>
