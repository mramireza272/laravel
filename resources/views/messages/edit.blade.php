@extends('layout')
@section('contenido')
	<h1>Editar Mensaje</h1>
	<form method="POST" action="{{ route('messages.update', $messages->id) }}">
			{!! method_field('PUT') !!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<p><label for="nombre">
			Nombre
				<input type="text" name="nombre" value="{{ $messages->nombre }}">
				{!! $errors->first('nombre', '<span class="error">:message</span>')!!}
			</label></p>
			<p><label for="email">
			Email
				<input type="email" name="email" value="{{ $messages->email }}">
				{!! $errors->first('email', '<span class="error">:message</span>')!!}
			</label></p>
			<p><label for="mensaje">
			Mensaje
				<textarea name="mensaje">{{ $messages->mensaje }}</textarea>
				{!! $errors->first('mensaje', '<span class="error">:message</span>')!!} 
			</label></p>
			<input type="submit" value="Enviar">
		</form>
@stop