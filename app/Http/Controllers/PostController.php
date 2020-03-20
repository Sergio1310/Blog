<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    public function index(){
    	$posts = Posts::getPost();
    	return view('index')
    	->with("posts",$posts);
    }

    public function nuevopost(){
    	return view('formulario');
    }

    public function newPost(Request $request){
            $id = date('his');
	    	$titulo = $request->input('titulo');
            $usuario = $request->input('usuario');
	    	$vmovil = $request->input('vmovil');
            $vweb = $request->input('vweb');
	    	$imagen = $request->input('imagen');
	    	$contenido = $request->input('contenido');
	    	$insertar = Posts::GenerarPost($id,$usuario,$titulo,$vmovil,$vweb,$imagen,$contenido);
    	return redirect('/');
    }
}
