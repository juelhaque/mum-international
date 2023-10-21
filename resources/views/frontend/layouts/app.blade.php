<!doctype html>
<html lang="en">

<head>

    <title>Mum-International</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Creative Multipurpose Bootstrap Template">

    <!-- Favicon -->

    <link rel="shortcut icon" href="{{ asset($company_profile->company_logo) }}">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('ui/frontend/assets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('ui/frontend/assets/vendor/themify-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/vendor/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/vendor/aos/aos.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/css/style.css') }}" />
    @stack('front-css')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/css1/style.css') }}" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/assets/css1/style.min.css') }}" /> --}}

</head>

<body>
    <div class="preloader">
        {{-- <img src="{{ asset($company_profile->company_logo) }}" alt="Pre-loader" > --}}
    </div>

    <!-- =======================
 header Start-->
    @include('frontend.layouts.header')
    <!-- =======================
 header End-->

    @yield('content')

    <!-- =======================
 footer  -->
    @include('frontend.layouts.footer')
    <!-- =======================
 footer  -->

    <!-- Back to top -->
    <div> <a href="#" class="back-top btn btn-red"><i class="ti-angle-up"></i></a> </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('ui/frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Vendors-->
    <script src="{{ asset('ui/frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('ui/frontend/assets/vendor/tiny-slider/tiny-slider.js') }}"></script>

    <!--Template Functions-->
    <script src="{{ asset('ui/frontend/assets/js/functions.js') }}"></script>


    @stack('front-js')

</body>

</html>
