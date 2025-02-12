@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Feedback</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.feedbacks.index') }}">Feedbacks</a>
                                </li>
                                <li class="breadcrumb-item active">Create Feedback</li>
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
                            <h4 class="card-title">Feedback Information</h4>

                            <br>

                            <form action="{{ route('admin.feedbacks.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="author"
                                        name="author" value="{{ old('author') }}">
                                    <x-backend.error name="author" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Body</label>
                                    <textarea class="form-control" id="validationCustom01" placeholder="body"
                                        name="body">{{ old('body') }}</textarea>
                                    <x-backend.error name="body" />
                                </div>

                                <div class="mb-3">
                                    <h4 class="card-title">Images</h4>

                                    <input type="file" class="form-control" id="customFile" name="images[]" multiple>
                                    <x-backend.error name="images" />
                                    <div id="imagePreviewContainer" style="margin-top: 10px;"></div>


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
