@extends('layout')
@section('contenido')
	<h1>Saludos a {{$nombre}}</h1>
	<ul>
		@forelse($consolas as $consola)
		<li>{{$consola}}</li>
		@empty
			<p>No hay consolas</p>
		@endforelse
	</ul>
	@if(count($consolas) === 1)
		<p>solo hay 1 consola</p>
	@elseif(count($consolas) > 1)
		<p>Tienes varias consolas</p>
	@else
		<p>no tienes ninguna consola</p>
	@endif
@stop