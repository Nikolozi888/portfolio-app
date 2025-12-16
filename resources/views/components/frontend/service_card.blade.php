<div class="col-xl-3">
    <div class="services__item">
        <div class="services__thumb">
            <a href="{{ route('service_show', $service->id) }}"><img src="{{ get_image($service->image) }}"
                    alt="Service Image"></a>
        </div>
        <div class="services__content">
            <div class="services__icon">
                <img class="light" src="{{ asset('Frontend/assets/img/icons/services_light_icon01.png') }}" alt="">
                <img class="dark" src="{{ asset('Frontend/assets/img/icons/services_icon01.png') }}" alt="">
            </div>
            <h3 class="title"><a href="{{ route('service_show', $service->id) }}">{{ $service->short_title }}</a></h3>
            <p>{{ $service->excerpt }}</p>

            <a href="{{ route('service_show', $service->id) }}" class="btn border-btn">Read more</a>
        </div>
    </div>
</div>