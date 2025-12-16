<section class="partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach (App\Models\PartnerMultiImages::all() as $image)
                        <li class="now-in-view">
                            <img class="light" src="{{ get_image($image->image) }}" alt="">
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-6">
                <div class="partner__content">
                    <div class="section__title">
                        <span class="sub-title">05 - partners</span>
                        <h2 class="title">{{ $partner->name }}</h2>
                    </div>
                    <p>{{ $partner->excerpt }}</p>
                    <a href="{{ route('contact.index') }}" class="btn">Start a conversation</a>
                </div>
            </div>
        </div>
    </div>
</section>