<section class="testimonial">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <ul class="testimonial__avatar__img">
                    @php
                        $multiImage = App\Models\MultiImage::first();
                    @endphp
                    @if ($multiImage)
                        @foreach (explode(',', $multiImage->images) as $image)
                            <li><img src="{{ asset('storage/' . $image) }}" alt=""></li>
                        @endforeach
                    @else
                        <p>No images found.</p>
                    @endif
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
