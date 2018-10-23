@extends('layout')
@section('contenido')
	<h1>Todos los Mensajes</h1>
	<table width="100%", border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Mensaje</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($messages as $message)
			<tr>
				<td> {{ $message->id }} </td>
				<td> <a href="{{ route('messages.show', $message->id) }}"> {{ $message->nombre }} </a></td>
				<td> {{ $message->email }} </td>
				<td> {{ $message->mensaje }} </td>
				<td> 
					<a href="{{ route('messages.edit', $message->id) }}"> Editar </a>
					<form style="display: inline;" method="POST" action="{{ route('messages.destroy', $message->id) }}">
						{!! method_field('DELETE') !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop