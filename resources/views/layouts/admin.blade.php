<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> @yield('title')</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('admin/css/vendors.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/apexcharts.css') }}" type="text/css" rel="stylesheet" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('admin/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/bootstrap-extended.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/colors.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/components.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/dark-layout.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/bordered-layout.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/semi-dark-layout.css') }}" type="text/css" rel="stylesheet" />

    <!-- BEGIN: Page CSS-->
    <link href="{{ asset('admin/css/vertical-menu.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/dashboard-ecommerce.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('admin/css/chart-apex.css') }}" type="text/css" rel="stylesheet" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('admin/css/style.css') }}" type="text/css" rel="stylesheet" />
    <!-- END: Custom CSS-->
    @stack('styles')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('layouts.inc.header')

    @include('layouts.inc.sidebar')
    @yield('content')
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ date('Y') }}<a
                    class="ms-25" href="" target="_blank">{{ config('app.name', 'Laravel') }}</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                class="float-md-end d-none d-md-block"><i data-feather="heart"></i></span></p>
    </footer>

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/js/apexcharts.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin/js/app-menu.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/js/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    @if (session('status'))
        <script>
            toastr['success'](
                '{{ session('status') }}', // The flash message
                {
                    closeButton: true,
                    tapToDismiss: false,
                    rtl: false
                }
            );
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr['error'](
                    '{{ $error }}', // The individual error message
                    '⚠️ Error!', {
                        closeButton: true,
                        tapToDismiss: false,
                        rtl: false
                    }
                );
            </script>
        @endforeach
    @endif

    @if (session('error'))
        <script>
            toastr['error'](
                '{{ session('error') }}', // The error from the session
                '⚠️ Error!', {
                    closeButton: true,
                    tapToDismiss: false,
                    rtl: false
                }
            );
        </script>
    @endif
    @stack('scripts')
</body>
<!-- END: Body-->

</html>
