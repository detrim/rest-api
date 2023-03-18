<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <!-- End -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/modern-horizontal-style.css') }}" />
    <!-- <link rel="stylesheet" href="css1/style.css"> -->

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <!--  -->
    <link rel="stylesheet" href="{{ asset('css1/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/owl.theme.default.min.css') }}">


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
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    @yield('login')
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright
                            &copy; 2018-{{ date('Y') }} All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
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
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('js/public.js') }}"></script>

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
    <!-- End custom js for this page -->
</body>

</html>
