<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templatecycle.com/demo/bootclassified-v1.6/dist/signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2016 17:50:04 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{asset('assets/ico/favicon.png')}}">
<title>BOOTCLASIFIED - Responsive Classified Theme</title>
 
 
 <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/longshadow.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
  
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>

<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
<a href="index" class="navbar-brand logo logo-title">
 
<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
BOOT<span>CLASSIFIED </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">

@if (Auth::guest())
    <li><a href="login">Login</a></li>
    <li><a href="/register">Signup</a></li>
@else
    <li><a href="account-home">{{ Auth::user()->name }}</a></li>
    
                                
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Signout <i class="glyphicon glyphicon-off"></i> 
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                
                          
    
@endif

<a class="btn btn-warning btn-lg" href="post-ads">Submit Free Ad</a>
</ul>
</div>
 
</div>
</nav>
</div>

    @yield('content')

<div class="footer" id="footer">
<div class="container">
<ul class=" pull-left navbar-link footer-nav">
<li><a href="/"> Home </a> <a href="about-us"> About us </a> <a href="terms-conditions"> Terms and
Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact"> Contact us </a> <a href="faq"> FAQ </a></li>
</ul>
<ul class=" pull-right navbar-link footer-nav">
<li> &copy; 2016 BootClassified</li>
</ul>
</div>
</div>


  
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
<script src="assets/js/owl.carousel.min.js"></script>
 
<script src="assets/js/jquery.matchHeight-min.js"></script>
 
<script src="assets/js/hideMaxListItem.js"></script>
 
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
 
<script src="assets/js/script.js"></script>

 
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>
 {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
