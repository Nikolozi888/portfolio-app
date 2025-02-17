@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Feedback</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.feedbacks.index') }}">Feedbacks</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Feedback</li>
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

                            <form action="{{ route('admin.feedbacks.update', $feedback->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $feedback->author }}" placeholder="author" name="author" required>
                                    <x-backend.error name="author" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Body</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $feedback->body }}" placeholder="body" name="body" required>
                                    <x-backend.error name="body" />
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
