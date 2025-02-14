@extends('layouts.admin_layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit About Info</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.informations.index') }}">About</a></li>
                            <li class="breadcrumb-item active">About Edit</li>
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

                        <h4 class="card-title">Edit About info</h4>

                        <form action="{{ route('admin.informations.update', $information->id) }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Title</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Title"
                                    name="title" value="{{ $information->title }}" required>
                                <x-backend.error name="title" />
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Excerpt</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Excerpt"
                                    name="excerpt" value="{{ $information->excerpt }}" required>
                                <x-backend.error name="excerpt" />
                            </div>
                            <div class="mb-3">
                                <h4 class="card-title">Image</h4>

                                <input type="file" class="form-control" id="customFile" name="image">
                                <x-backend.error name="image" />
                                <img width="200px" src="{{ asset($information->image) }}" alt="Image">
                            </div>
                            <div class="mb-3">
                                <h4 class="card-title">Video Link</h4>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Video Link"
                                    name="video" value="{{ $information->video }}" required>
                                <x-backend.error name="video" />
                            </div>

                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection
