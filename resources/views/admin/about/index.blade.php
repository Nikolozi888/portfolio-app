@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">About Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About</a></li>
                                <li class="breadcrumb-item active">About Info</li>
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

                            <h4 class="card-title">About</h4>

                            <div class="table-responsive">
                                @if ($about)
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Excerpt</th>
                                            <th>Actions</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td data-field="id" style="width: 80px">{{ $about->id }}</td>
                                            <td data-field="title">{{ $about->title }}</td>
                                            <td data-field="excerpt">{{ Str::limit($about->excerpt, 50) }}</td>
                                            <td style="width: 100px">
                                                <a href="{{ route('admin.about.edit',$about->id) }}" class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" class="d-inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-secondary btn-lg delete" title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                            <td>
                                                <a href="{{ route('about') }}" class="btn btn-outline-secondary btn-lg"
                                                    title="Details">
                                                    More Details
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @else
                                <h1>Not About Information</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
