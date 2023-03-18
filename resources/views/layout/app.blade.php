<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <!-- End -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/select2/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/modern-horizontal-style.css') }}" />

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <!--  -->
    <link rel="stylesheet" href="{{ asset('css1/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/dropify.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css1/asColorPicker.min.css') }}">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container-scroller">
        @yield('navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper ">
            <div class="col-sm-11 col-md-11 col-lg-11 col-xs-12 align-items-center justify-content-center mx-auto">
                <div class="main-panel">
                    @yield('content')
                    <footer class="footer container">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                2018-{{ date('Y') }} <a href="https://www.bootstrapdash.com/"
                                    target="_blank">BootstrapDash</a>. All
                                rights
                                reserved.</span>
                            <span
                                class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted
                                & made with <i class="mdi mdi-heart text-danger"></i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js" type="text/javascript') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/select2.js') }}"></script>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('js/public.js') }}"></script>
    <script src="{{ asset('js/dropify.js') }}"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>

    <script src="{{ asset('js/formpickers.js') }}"></script>
    <script src="{{ asset('js/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('js/jquery-asColor.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.jqueryui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        @if (Session::has('success'))

            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.success("{{ Session::get('success') }}", 'Success!', {
                timeOut: 12000
            });
        @endif
    </script>
    <script>
        @if (Session::has('error'))

            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.error("{{ Session::get('error') }}", 'Error!', {
                timeOut: 12000
            });
        @endif
    </script>
    <script>
        (function($) {
            'use strict';
            $('.dropify').dropify();
        })(jQuery);
    </script>

    <script>
        (function($) {
            'use strict';
            ($(".color-picker").length) {
                $('.color-picker').asColorPicker();
            }
        })(jQuery);
    </script>
</body>

</html>
