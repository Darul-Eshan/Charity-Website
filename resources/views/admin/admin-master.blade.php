<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flexy Free Bootstrap Admin Template by WrapPixel</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('admin-assets')}}/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{asset('admin-assets')}}/assets/css/styles.min.css" />
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
            <a class="d-flex justify-content-center" href="#">
                <img src="{{asset('admin-assets')}}/assets/images/logos/logo-wrappixel.svg" alt="" width="150">
            </a>


        </div>

        <div class="d-lg-flex align-items-center gap-2">
            <h3 class="text-white mb-2 mb-lg-0 fs-5 text-center">Check Flexy Premium Version</h3>
            <div class="d-flex align-items-center justify-content-center gap-2">

                <div class="dropdown d-flex">
                    <a class="btn btn-primary d-flex align-items-center gap-1 " href="javascript:void(0)" id="drop4"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-shopping-cart fs-5"></i>
                        Buy Now
                        <i class="ti ti-chevron-down fs-5"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- Sidebar Start -->
    @include('admin.include.left-sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
      @include('admin.include.header')
        <!--  Header End -->
       @yield('body')
    </div>
    @include('admin.include.footer')
</div>
<script src="{{asset('admin-assets')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('admin-assets')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin-assets')}}/assets/js/sidebarmenu.js"></script>
<script src="{{asset('admin-assets')}}/assets/js/app.min.js"></script>
<script src="{{asset('admin-assets')}}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{asset('admin-assets')}}/assets/libs/simplebar/dist/simplebar.js"></script>
<script src=".{{asset('admin-assets')}}/assets/js/dashboard.js"></script>
<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
