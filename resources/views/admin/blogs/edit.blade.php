@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
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

                            <form action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $blog->title }}" placeholder="title" name="title" required>
                                    <x-backend.error name="title" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Excerpt</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $blog->excerpt }}" placeholder="excerpt" name="excerpt" required>
                                    <x-backend.error name="excerpt" />
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        value="{{ $blog->author }}" placeholder="author" name="author" required>
                                    <x-backend.error name="author" />
                                </div>

                                <div class="mb-3">
                                    <h4 class="card-title">Image</h4>
                                    <input type="file" class="form-control" value="{{ $blog->image }}" id="customFile"
                                        name="image" onchange="previewImage();">
                                    <x-backend.error name="image" />
                                    <div id="imagePreviewContainer" style="margin-top: 10px; margin-bottom: 20px;"></div>
                                    <img width="200px" src="{{ get_image($blog->image) }}" alt="Blog Image">
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Category</h4>
                                    <select name="category_id" class="form-select" aria-label="Default select example">
                                        <option disabled>Select Category</option>
                                        @foreach (App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-backend.error name="category_id" />
                                </div>

                                <div class="mb-3">
                                    <h4 class="card-title">Tag</h4>
                                    <select name="tag_id" class="form-select" aria-label="Default select example">
                                        <option disabled>Select Tag</option>
                                        @foreach (App\Models\Tag::all() as $tag)
                                            <option value="{{ $tag->id }}"
                                                {{ $blog->tag_id == $tag->id ? 'selected' : '' }}>
                                                {{ $tag->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-backend.error name="tag_id" />
                                </div>



                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="elm2" name="description" placeholder="Description">{!! $blog->description !!}</textarea>
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
