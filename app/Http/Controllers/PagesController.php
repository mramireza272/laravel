<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;


class PagesController extends Controller
{
	protected $request;

	/*public function __construct()
	{
		//$this->middleware('example', ['only' => ['home']]);
		//$this->middleware('example', ['except' => ['home']]);
	}*/
    public function home()
    {
    	/*return response('contenido de la respuesta', 201)
    		->header('X-TOKEN', 'secret')
    		->header('X-TOKEN-2','secret')
    		->cookie('X-COOKIE', 'cookie'); */
    		return view('home'); 
    }
    public function contact()
    {
    	return view('contacto'); 
    }
    public function mensajes(CreateMessageRequest $request)
    {
    	 	/*$data =  $request->all();
    	 	return response()->json(['data' => $data], 202);*/
    	 	return back()
    	 			->with('info', 'tu mensaje ha sido enviado correctamente');
    }
    public function saludo($nombre = "invitado")
    {
    	$html = "<h2> contenido html </h2>";
		$script = "<script>alert('problema xss - cross site scripting!')</script>";
		$consolas = [
			//"PS4",
			"Xbox One",
			//"Wii U"
		];
		return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }

}
