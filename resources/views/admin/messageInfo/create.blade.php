@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Contact Form Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.messageInfo.index') }}">Contact Form
                                        Information</a></li>
                                <li class="breadcrumb-item active">Contact Form Information create</li>
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

                            <h4 class="card-title">Contact Form Information</h4>

                            <br>

                            <form action="{{ route('admin.messageInfo.store') }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Title"
                                        name="title" value="{{ old('title') }}">
                                    <x-backend.error name="title" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Email"
                                        name="email" value="{{ old('email') }}">
                                    <x-backend.error name="email" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Description" name="description" value="{{ old('description') }}">
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
@push('scripts')
@endpush