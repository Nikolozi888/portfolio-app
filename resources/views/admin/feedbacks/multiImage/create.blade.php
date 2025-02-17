@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Multi Images</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.feedbacks.multiImage.index') }}">MultiImage</a></li>
                                <li class="breadcrumb-item active">MultiImage create</li>
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

                            <form action="{{ route('admin.feedbacks.multiImage.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf

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
@push('scripts')
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
@endpush
