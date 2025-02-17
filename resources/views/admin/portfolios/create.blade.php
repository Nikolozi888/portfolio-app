@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Portfolio</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.portfolios.index') }}">Portfolios</a>
                                </li>
                                <li class="breadcrumb-item active">Create Portfolio</li>
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

                            <h4 class="card-title">Portfolio Information</h4>

                            <br>

                            <form action="{{ route('admin.portfolios.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="title"
                                        name="title" value="{{ old('title') }}">
                                    <x-backend.error name="title" />
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="category"
                                        name="category" value="{{ old('category') }}">
                                    <x-backend.error name="category" />
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" class="form-control" id="customFile" name="image"
                                        onchange="previewImage();" onchange="previewImage();">
                                    <x-backend.error name="image" />
                                    <div id="imagePreviewContainer"
                                        style="margin-top: 10px; margin-bottom: 20px; max-width: 200px;"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="elm2" name="description"
                                        placeholder="Description">{{ old('description') }}</textarea>
                                    <x-backend.error name="description" />
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