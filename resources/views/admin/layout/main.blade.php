<!DOCTYPE html>
<html lang="en" dir="rtl" class="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket Plus">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/bracketplus">
  <meta property="og:title" content="Bracket Plus">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>{{ env('APP_NAME') }}</title>

  <!-- vendor css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" integrity="sha512-JApjWRnfonFeGBY7t4yq8SWr1A6xVYEJgO/UMIYONxaR3C9GETKUg0LharbJncEzJF5Nmiv+Pr5QNulr81LjGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="{{ asset('bracketplus1.4/app/css/bracket.css') }}">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <style>
      body, h1, h2, h3, h4, h5, h6, span, p, i, a, span, button, input, .nav-link{
        font-family: 'Cairo', sans-serif !important;
      }
  </style>

  @stack('links')
</head>

<body>

  <!-- ########## START: LEFT PANEL ########## -->
  @include('admin.layout.side-menu')
  <!-- ########## END: LEFT PANEL ########## -->

  <!-- ########## START: HEAD PANEL ########## -->
  @include('admin.layout.head-menu')
  <!-- ########## END: HEAD PANEL ########## -->

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader">
      {{ $header }}
    </div><!-- br-pageheader -->
    <div class="br-pagetitle">
      {{ $title }}
    </div><!-- d-flex -->

    <div class="br-pagebody">

      <!-- start you own content here -->
      {{ $slot }}

    </div><!-- br-pagebody -->

  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <script src="{{ asset('bracketplus1.4/app/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/peity/jquery.peity.min.js') }}"></script>

  <script src="{{ asset('bracketplus1.4/app/js/bracket.js') }}"></script>
  @stack('scripts')

</body>

</html>