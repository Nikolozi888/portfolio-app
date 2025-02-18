@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Links</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.links.index') }}">Links</a></li>
                                <li class="breadcrumb-item active">All Links</li>
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

                            <h4 class="card-title">Links</h4>

                            <div class="table-responsive">
                                @if ($links->count() > 0)
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Icon</th>
                                                <th>Link</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($links as $link)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td data-field="id" style="width: 80px">{{ $link->id }}</td>
                                                    <td data-field="icon"><img src="{{ asset($link->icon) }}" alt="Icon"></td>
                                                    <td data-field="link">{{ $link->link }}</td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('admin.links.edit', $link->id) }}"
                                                            class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('admin.links.destroy', $link->id) }}" method="POST"
                                                            class="d-inline delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-secondary btn-lg delete"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h1>Not Links</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection