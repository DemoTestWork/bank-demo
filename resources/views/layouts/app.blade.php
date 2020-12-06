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
		
		<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="16x16">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
		<link rel="stylesheet" href="{{ asset('css/sticky-footer.css') }}">
		<link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />

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
				<a class="user-report px-2" href="#" data-toggle="modal" data-target="#user-new-message"><i class="far fa-envelope"></i> <span class="user-new-message">0</span></a>
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

			<!-- Modal -->
			<div class="modal fade" id="user-new-message" tabindex="-1" role="dialog" aria-labelledby="user-new-messageLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				<div class="modal-header py-0">
					{{ __('app.discussions') }}
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table id="notread-messages-table" class="table" style="width: 100%; cursor:pointer">
						<thead class="thead-light">
							<tr>
							<th class="py-0" scope="col">{{ __('app.message') }}</th>
							<th class="py-0" scope="col">{{ __('app.date') }}</th>
							<th class="py-0" scope="col">{{ __('app.subject') }}</th>
							<th class="py-0" scope="col">{{ __('app.status') }}</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
					<button type="button" class="btn btn-sm btn-warning text-light small">{{ __('app.check_the_mailbox') }}</button>
				</div>
				</div>
			</div>
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

		<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('js/additionnal-methods.min.js') }}"></script>


		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script> -->

		<script src="{{ asset('js/datatables.min.js') }}"></script>
		<script src="{{ asset('js/moment.js') }}"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(function(){
				function getNotReadMessage($parent = null) {
					let url = "{{ route('particular.message.not_read') }}";
					let d = new $.Deferred();
					$.ajax({
						type: 'GET',
						url: url,
						success : function(response) {
							d.resolve(response, $parent);
						}
					});
					return d.promise();
				}

				$(".nav-item.dropdown, .dropdown-custom").hover(
					function () {
						$('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
						$(this).addClass('open');
					},
					function () {
						$('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
						$(this).removeClass('open');
				});

				$('[data-toggle="tooltip"]').tooltip();

				$('.datepicker').datepicker({
					format: 'mm/dd/yyyy',
					// startDate: '-3d'
				});
				
				$.when( 
					getNotReadMessage()
				).then((response, $parent) => {
					$('.user-new-message').text(response.data.length);
					if( response.data.length <= 0 ) $('.user-new-message').removeClass('text-danger')
					else $('.user-new-message').addClass('text-danger')
				});
				let messageTable = null; 

				messageTable = $('#notread-messages-table').DataTable({
					ordering: false,
					paging: false,
					searching: false,
					info: false,
					ajax: "{{ route('particular.message.not_read') }}",
					columns: [
						{ 
							className: 'py-1',
							data: 'content' 
						},
						{ 
							className: 'py-1',
							data: 'created_at',
							render: function(data, type, row) {
								return moment(data, 'YYYY-DD-MM HH:mm:ss').format('DD.MM.yyyy HH:mm')
							}
						},
						{ 
							className: 'py-1',
							data: 'subject'
						},
						{
							className: 'text-center py-1',
							data: 'read',
							render: function(data, type, row) {
								return '<span class="badge badge-info px-2">-</span>';
								// return '<span class="label label-warning">-</span>';
							}
						},
					]
				});

				$('#notread-messages-table tbody').on('click', 'tr', function () {
					var data = messageTable.row( this ).data();
					console.log(data); return;
				});
			});
		</script>
		@yield('scripts')
	</body>
</html>