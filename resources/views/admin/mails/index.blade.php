@extends('layouts.admin_layout')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Inbox</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.emails.index') }}">Email</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <!-- Left sidebar -->
            <div class="email-leftbar card">
                <div class="d-grid">
                </div>
                <div class="mail-list mt-4">
                    <a href="{{ route('admin.emails.index') }}" class="active"><i class="mdi mdi-email-outline me-2"></i>
                        Inbox <span
                            class="ms-1 float-end">({{ App\Models\Contact::where('replied', '0')->count() }})</span></a>

                    <a href="{{ route('admin.emails.replied') }}" class="active"><i class="mdi mdi-email-outline me-2"></i>
                        Replied <span
                            class="ms-1 float-end">({{ App\Models\Contact::where('replied', '1')->count() }})</span></a>
                </div>

            </div>
            <!-- End Left sidebar -->


            <!-- Right Sidebar -->
            <div class="email-rightbar mb-3">

                <div class="card">
                    <ul class="message-list p-3">
                        @if (!empty($repliedEmails))
                            @foreach ($repliedEmails as $i => $email)
                                <x-backend.emails_card :email="$email" :i="$i" />
                            @endforeach
                        @else
                            @foreach ($emails as $i => $email)
                                @if (!$email->replied)
                                    <a href="{{ route('admin.emails.show', $email->id) }}" class="block">
                                        <x-backend.emails_card :email="$email" :i="$i" />
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>


                @if (isset($repliedEmails))
                    <div class="row">
                        <div class="col-7">
                            Showing {{ $repliedEmails->firstItem() }} - {{ $repliedEmails->lastItem() }} of
                            {{ $repliedEmails->total() }}
                        </div>
                        <div class="col-5">
                            <div class="float-end">
                                {{ $repliedEmails->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-7">
                            Showing {{ $emails->firstItem() }} - {{ $emails->lastItem() }} of {{ $emails->total() }}
                        </div>
                        <div class="col-5">
                            <div class="float-end">
                                {{ $emails->links() }}
                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div> <!-- end Col-9 -->

    </div>


    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Upcube.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
@endsection