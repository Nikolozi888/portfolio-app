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
                                <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About</a></li>
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

                            <form action="{{ route('admin.about.update', $about->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $about->title }}" placeholder="Title" name="title" required>
                                    <x-backend.error name="title" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Excerpt</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $about->excerpt }}" placeholder="Excerpt" name="excerpt" required>
                                    <x-backend.error name="excerpt" />
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Images</h4>
                                    <input type="file" class="form-control" id="customFile" name="images[]" multiple>
                                    <x-backend.error name="images" />
                                    @foreach (explode(',', $about->images) as $image)
                                        <div id="imagePreviewContainer" style="margin-top: 10px; display: inline-block;">
                                            <img src="{{ get_image($image) }}" alt="Uploaded Image"
                                                style="max-width: 100px; max-height: 100px; margin-right: 10px;">
                                        </div>
                                    @endforeach
                                </div>
                                <label for="experience">Experience</label>
                                <textarea id="elm1" name="experience"
                                    placeholder="Experience">{!! $about->experience !!}</textarea>
                                <x-backend.error name="experience" />
                                <br>
                                <br>
                                <label for="description">Description</label>
                                <textarea id="elm2" name="description"
                                    placeholder="Description">{!! $about->description !!}</textarea>
                                <x-backend.error name="description" />
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
@endpush