<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header-area -->
    <x-frontend.header />

    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        @yield('content')

    </main>
    <!-- main-area-end -->



    <!-- Footer-area -->
    <x-frontend.footer />
    <!-- Footer-area-end -->


    <!-- JS here -->
    <script src="{{ asset('Frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/element-in-view.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('Frontend/assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
</body>

</html>
