<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('includes.header')
		<aside class="main-sidebar">
			@include('includes.sidebar')
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					@yield('content_header')
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">@yield('content_header')</li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					@yield('content')
					<div class="overlay">
						<i class="fa fa-refresh fa-spin"></i>
					</div>
				</div>
			</section>
		</div>
	</div>
	@include('includes.footer')
	<script type="text/javascript">
		base_url = "{{ URL::to('/') }}" ;
	</script>
	@include('includes.footer-bottom')
</body>
</html>