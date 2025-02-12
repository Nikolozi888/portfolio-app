@extends('layouts.user_layout')
@section('content')
    <!-- banner-area -->
    @if (isset($userInfo))
        <x-frontend.banner_section :userInfo="$userInfo" />
    @endif

    <!-- banner-area-end -->

    <!-- about-area -->
    @if (isset($about))
        <x-frontend.about_section :about="$about" />
    @endif
    <!-- about-area-end -->

    <!-- services-area -->
    @if ($services->count() > 0)
        <x-frontend.services_section :services="$services" />
    @endif
    <!-- services-area-end -->

    <!-- portfolio-area -->
    @if ($portfolios->count() > 0)
        <x-frontend.portfolio_section :portfolios="$portfolios" />
    @endif
    <!-- portfolio-area-end -->

    <!-- partner-area -->
    @if ($partners->count() > 0)
        @foreach ($partners as $partner)
            <x-frontend.partner_section :partner="$partner" />
        @endforeach
    @endif
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    @if ($feedbacks->count() > 0)
        <x-frontend.feedback_section :feedbacks="$feedbacks" />
    @endif
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @if ($blogs->count() > 0)
        <x-frontend.blog_section :blogs="$blogs" />
    @endif
    <!-- blog-area-end -->

    <!-- contact-area -->
        <x-frontend.contact_section />
    <!-- contact-area-end -->
@endsection
