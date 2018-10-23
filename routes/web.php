<?php

//www.misitio.com = Route::get('/');
//www.misitio.com = Route::get('contacto', function(){});
/*Route::get('/', ['as' => 'home', function(){
	//echo "<a href=" . route('contactos') .">Contacto</a><br>";
	return view('home');
}]);*/

//Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home'])->middleware('example');
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);


/*Route::get('contactame', ['as' => 'contactos', function(){
	return view('contacto');
}]);*/

Route::get('contactame', ['as' => 'contactos','uses' => 'PagesController@contact']);
Route::post('contacto', 'PagesController@mensajes');

/*Route::get('saludos/{nombre?}', ['as' => 'saludos', function($nombre = "invitado"){
	//return view('saludo')->with(['nombre' => $nombre]);
	//return view('saludo', ['nombre' => $nombre]);
	$html = "<h2> contenido html </h2>";
	$script = "<script>alert('problema xss - cross site scripting!')</script>";
	$consolas = [
		//"PS4",
		//"Xbox One",
		//"Wii U"
	];
	return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
}])->where('nombre', "[A_Za-z]+");*/

Route::get('saludos/{nombre?}', ['as' => 'saludos','uses' => 'PagesController@saludo'])->where('nombre', "[A_Za-z]+");

Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);