<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/css/component1.css" />
		<script src="/js/modernizr-2.6.2.min.js"></script>

</head>
<body>
    <div id="app">
	@guest
	@else
	<div class="row">
  <div class="container" style="margin-top: 9px;">

    <div class="col-md-4">
    </div>

    <div class="col-md-4 col-md-offset-4">

      <div class="yellow-background">
				
		<div class="pull-right">
			<div class="dropdown">
				<button  type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
					style="background:url('/images/user.png');background-size:cover;width:42px;height:42px">
					
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style='margin-left: -52px;'>
				@guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
				@else
				<p style="text-align:center">{{ Auth::user()->name }}</p>
					<li><a href="#">Profile</a></li>
					<li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
										</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
					</li>
				@endguest
				</ul>
				</div>
		</div>  
    </div>

</div>
	</div>
	</div>
	@endguest
	   @yield('content')
	</div>
	@guest
	@else
    <div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button"><span class="icon-envelope-alt"></span></button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="/single"><span class="icon-user"></span></a></li>
				      <li><a href="#"><span class="icon-group"></span></a></li>
				      <li><a href="#"><span class="icon-align-center"></span></a></li>
				      <li><a href="#"><span class="icon-lock"></span></a></li>
				      <li><a href="#"><span class="icon-cogs"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
				<!-- End Nav Structure -->
			</div>
	@endguest
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    		<script src="/js/polyfills.js"></script>
		<script src="/js/demo1.js"></script>
		<!-- For the demo ad only -->   

</body>
</html>
