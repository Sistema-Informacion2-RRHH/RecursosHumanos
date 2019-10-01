<!DOCTYPE html>
<html>
<head>
	<title>
	@yield('titulo','inicio')
    </title>

    <style>
	#pma_navigation{
		display: none;
	}
	#floating_menubar{
		display: none;
	}
	#selflink{
		display: none;
	}

    </style>

	<link rel="stylesheet" type="text/css" href="{{asset('plugin/bootstrap/css/bootstrap.css')}}">
	
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>

</head>
<body>

<section>
	@include('plantilla.partial.nav')
</section>

<section>
	@yield('contenido')
	
</section>



<script src="{{asset('plugin/bootstrap/js/jquery-3.3.1.slim.js')}}"></script>
<script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
@yield('pie') 






</body>
</html>
