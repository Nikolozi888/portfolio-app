@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create About</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About</a></li>
                                <li class="breadcrumb-item active">About create</li>
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

                            <h4 class="card-title">About info</h4>

                            <br>

                            <form action="{{ route('admin.about.store') }}" enctype="multipart/form-data" method="POST">
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
                                <label for="experience">Experience</label>
                                <textarea id="elm1" name="experience"
                                    placeholder="Experience">{{ old('experience') }}</textarea>
                                <x-backend.error name="experience" />
                                <br>
                                <br>
                                <label for="description">Description</label>
                                <textarea id="elm2" name="description"
                                    placeholder="Description">{{ old('description') }}</textarea>
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