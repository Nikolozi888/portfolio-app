@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Portfolios</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.portfolios.index') }}">Portfolios</a></li>
                                <li class="breadcrumb-item active">All Portfolios</li>
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

                            <h4 class="card-title">Portfolios</h4>

                            <div class="table-responsive">
                                @if ($portfolios->count() > 0)
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($portfolios as $portfolio)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td data-field="id" style="width: 80px">{{ $portfolio->id }}</td>
                                                    <td data-field="title">{{ $portfolio->title }}</td>
                                                    <td data-field="description">{!! Str::limit($portfolio->body, 50) !!}</td>
                                                    <td data-field="category">{{ $portfolio->category }}</td>
                                                    <td data-field="image"><img style="width: 100px"
                                                            src="{{ asset($portfolio->image) }}"></td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}"
                                                            class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('admin.portfolios.destroy', $portfolio->id) }}"
                                                            method="POST" class="d-inline delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-outline-secondary btn-lg delete"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>

                                                    </td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('portfolio.show', $portfolio->id) }}"
                                                            class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                            More Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h1>Not Portfolios</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
