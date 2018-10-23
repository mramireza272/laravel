<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.active{
			text-decoration: none;
			color: green;
		}

		.error{
			color: red;
			font-size: 12px;
		}
	</style>
	<title>Mi sitio</title>
</head>
<body>
	<header>
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}?>
		<nav>
			<a class="{{ activeMenu('/')}}" href=" {{ route('home') }} " class="activePage">Inicio</a>
			<a class="{{ activeMenu('saludos/*')}}" href=" {{ route('saludos', 'martin') }}" class="activePage">Saludo</a>
			<a class="{{ activeMenu('contactame')}}" href=" {{ route('messages.create') }}">Contacto</a>
			<a class="{{ activeMenu('mensajes')}}" href=" {{ route('messages.index') }}">Mensajes</a>
		</nav>
	</header>
	@yield('contenido')
	<footer>Copyright {{date('Y')}}</footer>
</body>
</html>