@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                                <li class="breadcrumb-item active">Create Blog</li>
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

                            <h4 class="card-title">Blog Information</h4>

                            <br>

                            <form action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="title"
                                        name="title" value="{{ old('title') }}">
                                    <x-backend.error name="title" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Excerpt</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="excerpt"
                                        name="excerpt" value="{{ old('excerpt') }}">
                                    <x-backend.error name="excerpt" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="author"
                                        name="author" value="{{ old('author') }}">
                                    <x-backend.error name="author" />
                                </div>

                                <div class="mb-3">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" class="form-control" id="customFile" name="image"
                                        onchange="previewImage();">
                                    <x-backend.error name="image" />
                                    <div id="imagePreviewContainer" style="margin-top: 10px;"></div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Category</h4>
                                    <select name="category_id" class="form-select" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                        @foreach (App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-backend.error name="category_id" />
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Tag</h4>
                                    <select name="tag_id" class="form-select" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                        @foreach (App\Models\Tag::all() as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-backend.error name="tag_id" />
                                </div>


                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="elm2" name="description"
                                        placeholder="Description">{{ old('description') }}</textarea>
                                    <x-backend.error name="description" />
                                </div>

                                <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    </div>
@endsection