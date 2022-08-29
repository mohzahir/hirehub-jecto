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
  <!-- <link href="{{ asset('bracketplus1.4/app/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('bracketplus1.4/app/') }}lib/ionicons/css/ionicons.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" integrity="sha512-JApjWRnfonFeGBY7t4yq8SWr1A6xVYEJgO/UMIYONxaR3C9GETKUg0LharbJncEzJF5Nmiv+Pr5QNulr81LjGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Bracket CSS -->
  <link rel="stylesheet" href="{{ asset('bracketplus1.4/app/css/bracket.css') }}">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    span,
    p,
    i,
    a,
    span,
    button,
    input,
    .nav-link {
      font-family: 'Cairo', sans-serif !important;
    }
  </style>
</head>

<body>

  <div class="d-flex align-items-center justify-content-center ht-100v">
    <img src="{{ asset('bracketplus1.4/app/img/img22.jpg') }}" class="wd-100p ht-100p object-fit-cover" alt="">
    <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> Hire <span class="tx-info">Hub</span> <span class="tx-normal">]</span></div>
        <div class="tx-white-5 tx-center mg-b-60">تسجيل الدخول الى لوحة التحكم</div>
        @include('flash-message')
        <form action="{{ route('admin.login.submit') }}" method="post">
          @csrf
          <div class="form-group">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control fc-outline-dark" placeholder="أدخل الايميل">
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" name="password" class="form-control fc-outline-dark" placeholder="أدخل كلمة السر">
            <a href="" class="tx-info tx-12 d-block mg-t-10">نسيت كلمة السر?</a>
          </div><!-- form-group -->
          <button type="submit" class="btn btn-info btn-block">دخول</button>
        </form>


        <!-- <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div> -->
      </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
  </div><!-- d-flex -->

  <script src="{{ asset('bracketplus1.4/app/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
  <script src="{{ asset('bracketplus1.4/app/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>