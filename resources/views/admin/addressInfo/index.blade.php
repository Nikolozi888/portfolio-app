@extends('layouts.admin_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Footer Address Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.addressInfo.index') }}">Address
                                        Information</a></li>
                                <li class="breadcrumb-item active">Address Info</li>
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

                            <h4 class="card-title">Address Info</h4>

                            <div class="table-responsive">
                                @if ($infos->count() > 0)
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Country</th>
                                                <th>Description</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($infos as $info)
                                                <tr data-id="1" style="cursor: pointer;">
                                                    <td data-field="id" style="width: 80px">{{ $info->id }}</td>
                                                    <td data-field="title">{{ $info->title }}</td>
                                                    <td data-field="address">{{ $info->country }}</td>
                                                    <td data-field="email">{{ $info->email }}</td>
                                                    <td data-field="description">{{ Str::limit($info->description, 50) }}</td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('admin.addressInfo.edit', $info->id) }}"
                                                            class="btn btn-outline-secondary btn-lg edit" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('admin.addressInfo.destroy', $info->id) }}"
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h1>Not Address Information</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection