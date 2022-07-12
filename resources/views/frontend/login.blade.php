<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Smart Packing Management System</title>

    <!-- vendor css -->
    <link href="{{asset('backend/../lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/../lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/../lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('backend/../lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/../css/starlight.css')}}">
</head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">
        <form method="POST" action="{{ route('login') }}">
            @csrf
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Smart Packing <span class="tx-info tx-normal">System</span></div>
        <div class="tx-center mg-b-60">Login Page</div>



        <div class="form-group">
          <input type="email" id="email" name="email" :value="old('email')" class="form-control" placeholder="Enter your Email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password"  name="password" required autocomplete="current-password"  class="form-control" placeholder="Enter your password">
          {{-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> --}}
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>

        {{-- <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div> --}}
      </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="{{asset('backend/../lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/../lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/../lib/bootstrap/bootstrap.js')}}"></script>

  </body>
</html>
