<section class="testimonial">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <ul class="about__icons__wrap">
                    @foreach (App\Models\MultiImage::all() as $image)
                        <li class="now-in-view">
                            <img class="light" src="{{ get_image($image->image) }}" alt="">
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial__wrap">
                    <div class="section__title">
                        <span class="sub-title">06 - Client Feedback</span>
                        <h2 class="title">Happy clients feedback</h2>
                    </div>
                    <div class="testimonial__active">
                        @foreach ($feedbacks as $feedback)
                            <x-frontend.feedback_item :feedback="$feedback" />
                        @endforeach
                    </div>
                    <div class="testimonial__arrow"></div>
                </div>
            </div>
        </div>
    </div>
</section>