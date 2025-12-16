@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Link</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.links.index') }}">Links</a></li>
                                <li class="breadcrumb-item active">Edit Link</li>
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

                            <h4 class="card-title">Link Information</h4>

                            <br>

                            <form action="{{ route('admin.links.update', $link->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" class="form-control" value="{{ $link->icon }}" id="customFile"
                                        name="icon" onchange="previewImage();">
                                    <x-backend.error name="icon" />
                                    <div id="imagePreviewContainer"
                                        style="max-width: 200px; margin-top: 10px; margin-bottom: 20px;"></div>
                                    <img style="max-width: 200px" src="{{ get_image($link->icon) }}" alt="Link Icon">
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Link</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $link->link }}" placeholder="link" name="link">
                                    <x-backend.error name="link" />
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