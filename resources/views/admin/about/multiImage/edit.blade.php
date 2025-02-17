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
                                        href="{{ route('admin.about.multiImage.index') }}">MultiImage</a></li>
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

                            <form action="{{ route('admin.about.multiImage.update', $multiImage->id) }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="mb-3">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" class="form-control" name="image">
                                    <x-backend.error name="image" />
                                    <div id="imagePreviewContainer" style="margin-top: 10px;"></div>

                                    <img src="{{ asset($multiImage->image) }}" alt="Multi Image" width="100"
                                        style="margin-right: 10px;">
                                </div>

                                <div class="mb-3">
                                    <h4 class="card-title">About</h4>
                                    <select name="about_id" class="form-select" required>
                                        <option selected disabled>Choose a About</option>
                                        @foreach (App\Models\About::all() as $about)
                                            <option value="{{ $about->id }}" {{ $about->id == $multiImage->about_id ? 'selected' : '' }}>
                                                {{ $about->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-backend.error name="about_id" />
                                </div>

                                <button class="btn btn-primary" type="submit">Update</button>
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