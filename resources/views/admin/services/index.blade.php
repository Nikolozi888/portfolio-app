@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
                                <li class="breadcrumb-item active">All Services</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Services</h4>

                            <div class="table-responsive">
                                @if ($services->count() > 0)
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Short title</th>
                                                <th>Title</th>
                                                <th>Excerpt</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($services as $service)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td data-field="id" style="width: 80px">{{ $service->id }}</td>
                                                    <td data-field="short_title">{{ $service->short_title }}</td>
                                                    <td data-field="title">{{ $service->title }}</td>
                                                    <td data-field="excerpt">{!! Str::limit($service->excerpt, 50) !!}</td>
                                                    <td data-field="description">{!! Str::limit($service->excerpt, 50) !!}</td>
                                                    <td data-field="tag"><img style="width: 100px"
                                                            src="{{ asset('storage/' . $service->image) }}"
                                                            alt="Blog Image">
                                                    </td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('admin.services.edit', $service->id) }}"
                                                            class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('admin.services.destroy', $service->id) }}"
                                                            method="POST" class="d-inline delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-outline-secondary btn-lg delete"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>

                                                    </td>
                                                    <td>
                                                        <a href="{{ route('service_show', $service->id) }}"
                                                            class="btn btn-outline-secondary btn-lg" title="Details">
                                                            More Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h1>Not Services</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
