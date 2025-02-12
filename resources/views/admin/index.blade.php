@extends('layouts.admin_layout')
@section('content')
    <div class="row">
        <x-backend.index_card title="Blogs" :variable="$blogs" />
        <x-backend.index_card title="Categories" :variable="$categories" />
        <x-backend.index_card title="Feedbacks" :variable="$feedbacks" />
        <x-backend.index_card title="Partners" :variable="$partners" />
        <x-backend.index_card title="Portfolios" :variable="$portfolios" />
        <x-backend.index_card title="Services" :variable="$services" />
        <x-backend.index_card title="Tags" :variable="$tags" />

    </div>
@endsection
