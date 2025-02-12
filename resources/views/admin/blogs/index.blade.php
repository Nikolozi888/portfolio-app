@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                                <li class="breadcrumb-item active">All Blogs</li>
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

                            <h4 class="card-title">Blogs</h4>

                            <div class="table-responsive">
                                @if ($blogs->count() > 0)
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Excerpt</th>
                                                <th>Category</th>
                                                <th>Tag</th>
                                                <th>Author</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blogs as $blog)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td data-field="id" style="width: 80px">{{ $blog->id }}</td>
                                                    <td data-field="title">{{ $blog->title }}</td>
                                                    <td data-field="excerpt">{{ Str::limit($blog->excerpt, 50) }}</td>
                                                    <td data-field="category">{{ $blog->category->name ?? 'No Category' }}
                                                    </td>
                                                    <td data-field="tag">{{ $blog->tag->name ?? 'No tag' }}
                                                    </td>
                                                    <td data-field="tag">{{ $blog->author }}</td>
                                                    <td data-field="tag"><img style="width: 100px"
                                                            src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
                                                    </td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                            class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                                            class="d-inline delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-secondary btn-lg delete"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>

                                                    </td>
                                                    <td>
                                                        <a href="{{ route('blog.show', $blog->slug) }}"
                                                            class="btn btn-outline-secondary btn-lg" title="Details">
                                                            More Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h1>Not Blogs</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
