@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Profile Information</h4>

                            <br>

                            <form action="{{ route('admin.profile.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $user->name }}" placeholder="name" name="name">
                                        <x-backend.error name="name" />
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">UserName</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $user->username }}" placeholder="username" name="username">
                                        <x-backend.error name="username" />
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $user->email }}" placeholder="email" name="email">
                                        <x-backend.error name="email" />
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="validationCustom01"
                                        value="{{ $user->phone }}" placeholder="phone" name="phone">
                                        <x-backend.error name="phone" />
                                </div>

                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $user->address }}" placeholder="address" name="address">
                                        <x-backend.error name="address" />
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
