@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Main Page Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.informations.index') }}">Main Page
                                        Information</a></li>
                                <li class="breadcrumb-item active">Information create</li>
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

                            <h4 class="card-title">Information</h4>

                            <br>

                            <form action="{{ route('admin.informations.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Title"
                                        name="title" value="{{ old('title') }}">
                                        <x-backend.error name="title" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Excerpt</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Excerpt"
                                        name="excerpt" value="{{ old('excerpt') }}">
                                        <x-backend.error name="excerpt" />
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" class="form-control" id="customFile" name="image">
                                    <x-backend.error name="image" />
                                    <img id="imagePreview" src="#" alt="Uploaded Image"
                                        style="display: none; max-width: 200px; margin-top: 10px;">
                                </div>

                                <div class="mb-3">
                                    <h4 class="card-title">Video Link</h4>

                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Video Link" name="video" value="{{ old('video') }}">
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
