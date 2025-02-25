@extends('layouts.user_layout')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Contact us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
            <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
            <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
            <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
            <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
            <li><img src="{{ asset('Frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
        </ul>
    </div>
</section>

<!-- breadcrumb-area-end -->

<!-- contact-map -->
<div id="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
        allowfullscreen loading="lazy"></iframe>
</div>
<!-- contact-map-end -->

<!-- contact-area -->
<div class="contact-area">

    <div class="container">

        <form action="{{ route('contact.store') }}" method="POST" class="contact__form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Enter your name*" value="{{ old('name') }}">
                    <x-backend.error name="name" />
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="Enter your email*" value="{{ old('email') }}">
                    <x-backend.error name="email" />
                </div>
                <div class="col-md-6">
                    <input type="text" name="subject" placeholder="Enter your subject*" value="{{ old('subject') }}">
                    <x-backend.error name="subject" />
                </div>
                <div class="col-md-6">
                    <input type="text" name="budget" placeholder="Your Budget*" value="{{ old('budget') }}">
                    <x-backend.error name="budget" />
                </div>
            </div>
            <textarea name="message" id="message" placeholder="Enter your massage*">{{ old('name') }}</textarea>
            <button type="submit" class="btn">send massage</button>
        </form>
    </div>
</div>
<!-- contact-area-end -->
@endsection
