<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/theme-dark.css') }}">
    <title>Jecto - Job Board Bootstrap 5 Template</title>
    <link rel="icon" type="image/png" href="{{ asset('jecto/default/assets/img/favicon.png') }}">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>


    <div class="navbar-area fixed-top">
        @include('website.layout.navbar')
    </div>


    {{ $slot }}

    <footer class="pt-100 pb-70">
        @include('website.layout.footer')
    </footer>
    
    
    <div class="copyright-area two">
        @include('website.layout.copyright')
    </div>


    <script src="{{ asset('jecto/default/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('jecto/default/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/jquery.mixitup.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('jecto/default/assets/js/jquery.appear.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/progressbar.min.js') }}"></script>

    <script src="{{ asset('jecto/default/assets/js/custom.js') }}"></script>
</body>

</html>