<!DOCTYPE html>
<html>

<head>
	<title>
		@yield('titulo','inicio')
	</title>
	<script>
		window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
	</script>
	<meta name="view">
</head>

<body>
	<section>
		@include('plantilla.partial.nav')
	</section>

	<script src="{{asset('js/sidebar.js')}}">
		<script src="{{asset('plugin/bootstrap/js/jquery-3.3.1.slim.js')}}">
	</script>
	<script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>

	@yield('pie')
	<!------ Include the above in your HEAD tag ---------->
</body>

</html>