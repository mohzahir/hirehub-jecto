<!DOCTYPE html>
<html @if(app()->getLocale() == "ar") lang='ar' dir='rtl' @else lang='en' dir='ltr' @endif>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/nice-select.min.css') }}">

    <!-- <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/boxicons.min.css') }}"> -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- <link rel="stylesheet" href="{{ asset('jecto/default/assets/fonts/flaticon.css') }}"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/flaticon@0.1.0/main.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.css" rel="stylesheet" media="all">
    
    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/theme-dark.css') }}">

    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('jecto/default/assets/css/rtl.css') }}">
    @endif
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('jecto/default/assets/img/favicon.png') }}">

    @stack('styles')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6, span, div, i, a, p{
            font-family: 'Cairo', sans-serif;
            /* font-family: 'Quicksand', sans-serif; */
        }
    </style>
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

    <footer class="footer-area pt-100 three pb-70">
        @include('website.layout.footer')
    </footer>
    
    
    <div class="copyright-area three">
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
    @stack('scripts')
</body>

</html>