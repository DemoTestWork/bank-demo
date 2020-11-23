@if( Auth::user() )
	@php $worker = Auth::user(); @endphp
@else
	@php $worker = null; @endphp
@endif


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
		<link rel="stylesheet" href="{{ asset('css/sticky-footer.css') }}">

        <title>@yield('title')</title>

		<!-- Font Awesome -->
		{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js') !!}
	</head>
	<body>

		<header class="position-relative">
			<nav class="navbar navbar-expand-md navbar-light bg-light px-5" style="padding: 0 1rem;">
				<a class="navbar-brand-custom" href="#">{{ config('app.name') }}</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto ml-5 pt-5">
					@if( Auth::guard('user')->check() )
						{{ Html::particular_navbar() }}
					@else
						{{ Html::guest_navbar() }}
					@endif
					</ul>
				</div>
			</nav>
			@if( Auth::guard('user')->check() )
			<div class="user-report position-absolute" style="top: -3px; right: 3em">
				<a class="user-report px-2" href="#"><i class="far fa-envelope"></i> <span class="user-new-message">0</span></a>
				<a class="user-report px-2" href="#"><i class="far fa-bell"></i></a>
				<div class="dropdown show d-inline-block">
					<a class="user-report px-2 text-uppercase dropdown-toggle" href="#" role="button" id="user-login-report" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user"></i> <span class="user-name">{{ Auth::guard('user')->user()->name }}</span>
					</a>
					<!-- <div class="dropdown-menu" aria-labelledby="user-login-report">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
					</div> -->
				</div>
				<a class="user-report px-2" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i></a>
				<form id="logout-form" action="{{ route('particular.session.destroy') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
			</div>
			@endif
		</header>

		<!-- Main Content -->
		@yield('content')
		<!-- End Main Content -->

        {{-- Html::footer_main() --}}
		<footer class="footer">
			<div class="container-fluid px-5">
				<span class="float-right text-muted text-right">
					{{ __('app.web.app.name') }}<br>
					{{ 'Copyright' }} &copy; {{ date('Y').' '.config('app.name') }}
				</span>
			</div>
		</footer>
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ asset('js/popper-1.16.0.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<script type="text/javascript">
			$(function(){
				$(".nav-item.dropdown, .dropdown-custom").hover(
					function () {
						$('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
						$(this).addClass('open');
					},
					function () {
						$('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
						$(this).removeClass('open');
				});
			});
		</script>
	</body>
</html>