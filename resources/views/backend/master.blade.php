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

    <!-- ########## START: LEFT PANEL ########## -->
  @include('backend.left_panel')
    <!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div>
        <!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">Admin<span class="hidden-md-down"></span></span>
                        <img src="{{asset('backend/../img/')}}" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            {{-- <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                            <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                            <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                            <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li> --}}
                            <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div>
                    <!-- dropdown-menu -->
                </div>
                <!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div>
            <!-- navicon-right -->
        </div>
        <!-- sl-header-right -->
    </div>
    <!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->

    <!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->

  @yield('content');
        <!-- sl-pagebody -->
      {{-- <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2022.Smart Packing Management. All Rights Reserved.</div>
                <div>Made by Smart Packing System.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer> --}}
    </div>
    <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('backend/../lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/../lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/../lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('backend/../lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('backend/../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('backend/../lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('backend/../lib/d3/d3.js')}}"></script>
    <script src="{{asset('backend/../lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('backend/../lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('backend/../lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/../lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/../lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/../lib/flot-spline/jquery.flot.spline.js')}}"></script>

    <script src="{{asset('backend/../js/starlight.js')}}"></script>
    <script src="{{asset('backend/../js/ResizeSensor.js')}}"></script>
    <script src="{{asset('backend/../js/dashboard.js')}}"></script>
</body>

</html>
