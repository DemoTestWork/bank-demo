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

		<header>
			<nav class="navbar navbar-expand-md navbar-light bg-light px-5" style="padding: 0 1rem;">
				<a class="navbar-brand-custom" href="#">{{ config('app.name') }}</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto ml-5 pt-5">
					@if( !Auth::user() )
						{{ Html::particular_navbar() }}
					@else
						{{ Html::guest_navbar() }}
					@endif
					</ul>
					
				</div>
			</nav>
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
				$(".nav-item.dropdown, .dropdown").hover(
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