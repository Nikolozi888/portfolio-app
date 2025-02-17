@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Password</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Password Information</h4>

                            <br>

                            <form action="{{ route('admin.profile.password.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="mb-3">
                                    <label for="old_password" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" id="old_password"
                                        placeholder="Enter old password" name="old_password">
                                    <x-backend.error name="old_password" />
                                </div>

                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="new_password"
                                        placeholder="Enter new password" name="new_password">
                                    <x-backend.error name="new_password" />
                                </div>

                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="new_password_confirmation"
                                        placeholder="Confirm new password" name="new_password_confirmation">
                                    <x-backend.error name="new_password_confirmation" />
                                </div>

                                <button class="btn btn-primary" type="submit">Update Password</button>
                            </form>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection