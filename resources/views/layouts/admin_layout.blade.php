<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="shortcut icon" href="{{ asset('Backend/assets/images/favicon.ico') }}">
    <link href="{{ asset('Backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('Backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
</head>

<body data-topbar="dark">
    <div id="layout-wrapper">
        {{-- Header --}}
        <x-backend.header />

        {{-- Sidebar --}}
        <x-backend.sidebar />

        {{-- Main Content --}}
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{-- Content goes Here --}}
                    @yield('content')
                </div>
            </div>
            <x-backend.footer />
        </div>
    </div>

    <script src="{{ asset('Backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script
        src="{{ asset('Backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
        </script>
    <script src="{{ asset('Backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('Backend/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/app.js') }}"></script>
    <script src="{{ asset('Backend/assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/pages/form-editor.init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('Backend/assets/js/code.js') }}"></script>
    <script src="{{ asset('Backend/assets/js/sweetAlert.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>

    <script>
        @if (Session::has('message'))

            var type = "{{ Session::get('type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

    <script>
        document.getElementById('customFile').addEventListener('change', function (event) {
            let files = event.target.files;
            let previewContainer = document.getElementById('imagePreviewContainer');

            // Clear previous previews
            previewContainer.innerHTML = '';

            for (let i = 0; i < files.length; i++) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '100px';  // You can adjust the size as needed
                    img.style.maxHeight = '100px'; // You can adjust the size as needed
                    img.style.marginRight = '10px';
                    previewContainer.appendChild(img);
                };
                reader.readAsDataURL(files[i]);
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault(); // Prevent immediate form submission

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit the form only if confirmed
                        }
                    });
                });
            });
        });
    </script>
    <script>
        function previewImage() {
            const fileInput = document.getElementById('customFile');
            const previewContainer = document.getElementById('imagePreviewContainer');
            const file = fileInput.files[0];

            if (file) {
                previewContainer.innerHTML = '';

                const reader = new FileReader();
                reader.onload = function (event) {
                    // Create the wrapper to position the delete button on the image
                    const wrapper = document.createElement('div');
                    wrapper.style.position = 'relative';
                    wrapper.style.display = 'inline-block';

                    // Create the image element.
                    const img = document.createElement('img');
                    img.src = event.target.result;
                    img.style.display = 'block';
                    img.style.width = '100%';
                    img.style.borderRadius = '8px';

                    // Create the delete button ('×') and style it.
                    const deleteButton = document.createElement('div');
                    deleteButton.innerHTML = '&times;'; // HTML entity for ×
                    deleteButton.style.position = 'absolute';
                    deleteButton.style.top = '5px';
                    deleteButton.style.right = '5px';
                    deleteButton.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
                    deleteButton.style.color = 'white';
                    deleteButton.style.borderRadius = '50%';
                    deleteButton.style.width = '20px';
                    deleteButton.style.height = '20px';
                    deleteButton.style.display = 'flex';
                    deleteButton.style.alignItems = 'center';
                    deleteButton.style.justifyContent = 'center';
                    deleteButton.style.cursor = 'pointer';
                    deleteButton.style.fontSize = '14px';
                    deleteButton.style.lineHeight = '20px';

                    // When the delete button is clicked:
                    deleteButton.onclick = function () {
                        // Clear the file input and preview container
                        fileInput.value = '';
                        previewContainer.innerHTML = '';
                    };

                    // Append image and delete button to the wrapper
                    wrapper.appendChild(img);
                    wrapper.appendChild(deleteButton);

                    // Append the wrapper to the preview container
                    previewContainer.appendChild(wrapper);
                };

                // Read the file as a Data URL.
                reader.readAsDataURL(file);
            }
        }

    </script>

    @stack('scripts')
</body>

</html>