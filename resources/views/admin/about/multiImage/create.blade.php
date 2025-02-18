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
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.about.multiImage.index') }}">MultiImage</a></li>
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

                            <form action="{{ route('admin.about.multiImage.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf

                                <div class="mb-3">
                                    <h4 class="card-title">Images</h4>
                                    <input type="file" class="form-control" name="images[]" multiple required>
                                    <x-backend.error name="images" />
                                    <div id="imagePreviewContainer" style="margin-top: 10px;"></div>
                                </div>

                                <button class="btn btn-primary" type="submit">Submit</button>
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