<html>
	<head>
		<title>@yield('titulo')</title>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body class="blue-grey lighten-5">
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
			@include('templates/nav')
			@yield('conteudo')

	</body>
	<script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
	</script>
</html>