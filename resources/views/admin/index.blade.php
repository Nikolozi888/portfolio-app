@extends('layouts.admin_layout')
@section('content')
    <div class="row">
        <x-backend.index_card title="Unread Emails" :variable="$emails" />
        <x-backend.index_card title="Blogs" :variable="$blogs" />
        <x-backend.index_card title="Categories" :variable="$categories" />
        <x-backend.index_card title="Feedbacks" :variable="$feedbacks" />
        <x-backend.index_card title="Partners" :variable="$partners" />
        <x-backend.index_card title="Portfolios" :variable="$portfolios" />
        <x-backend.index_card title="Services" :variable="$services" />
        <x-backend.index_card title="Tags" :variable="$tags" />
        <x-backend.index_card title="About's multiImages" :variable="$aboutMultiImages" />
        <x-backend.index_card title="Partner's multiImages" :variable="$partnerMultiImages" />

    </div>
@endsection