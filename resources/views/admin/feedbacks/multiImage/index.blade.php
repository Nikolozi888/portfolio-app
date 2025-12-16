@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All MultiImage</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.feedbacks.multiImage.index') }}">MultiImage</a></li>
                                <li class="breadcrumb-item active">All MultiImage</li>
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
                            @if ($multiImages->count() > 0)


                                <h4 class="card-title">MultiImage</h4>

                                <div class="table-responsive">

                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($multiImages as $image)
                                                @if (!empty($image))
                                                    <tr data-id="1" style="cursor: pointer;">
                                                        <td data-field="id">{{ $image->id }}</td>
                                                        <td data-field="images">
                                                            <img src="{{ get_image($image->image) }}" alt="Image" width="100">
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.feedbacks.multiImage.edit', $image->id) }}"
                                                                class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>

                                                            <form action="{{ route('admin.feedbacks.multiImage.destroy', $image->id) }}"
                                                                method="POST" class="d-inline delete-form">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-outline-secondary btn-lg delete"
                                                                    title="Delete">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            @else
                                <h1>Not Images</h1>
                            @endif
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection