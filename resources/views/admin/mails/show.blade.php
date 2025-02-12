@extends('layouts.admin_layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Read Email</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.emails.index') }}">Email</a></li>
                        <li class="breadcrumb-item active">Read Email</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">

            <!-- Right Sidebar -->

            <div class="card">


                <div class="card-body">
                    <div class="d-flex mb-4">
                        <div class="flex-1">
                            <h5 class="font-size-14 my-1">{{ $contact->name }}</h5>
                            <small class="text-muted">{{ $contact->email }}</small>
                        </div>
                    </div>

                    <p>{{ $contact->message }}</p>
                    <hr />



                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#composemodal">
                        Reply
                    </button>
                </div>

            </div>
            <!-- card -->

        </div>
        <!-- end Col-9 -->

    </div>

    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.emails.send', $contact->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                                <textarea id="elm1" name="body" placeholder="Reply Message"></textarea>
                                <x-backend.error name="body" />
                        </div>
                        <button type="submit" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
