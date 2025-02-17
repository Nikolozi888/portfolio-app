@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Multi Images</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.feedbacks.multiImage.index') }}">MultiImage</a></li>
                                <li class="breadcrumb-item active">MultiImage edit</li>
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

                            <h4 class="card-title">MultiImages</h4>

                            <br>

                            <form action="{{ route('admin.feedbacks.multiImage.update', $multiImages->id) }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="mb-3">
                                    <h4 class="card-title">Images</h4>

                                    <input type="file" class="form-control" id="customFile" name="images[]" multiple>
                                    <x-backend.error name="images" />

                                    <div class="image-preview-container" id="imagePreviewContainer">
                                        @foreach (explode(',', $multiImages->images) as $image)
                                            <div class="image-preview"
                                                style="position: relative; display: inline-block; margin-top: 10px;">
                                                <img src="{{ asset($image) }}" alt="Uploaded Image" class="uploaded-image"
                                                    style="max-width: 100px; max-height: 100px; margin-right: 10px; border-radius: 5px;">
                                            </div>
                                        @endforeach
                                    </div>
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
@push('scripts')

@endpush