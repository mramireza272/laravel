@extends('layout')
@section('contenido')
	<h1>Mensaje</h1>
	<p>Enviado por {{ $messages->nombre }} - {{ $messages->email }}</p>
	<p>{{ $messages->mensaje }}</p>
@stop