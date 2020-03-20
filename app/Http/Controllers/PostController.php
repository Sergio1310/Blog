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

    public function cambiarstatus(Request $request){
    	$id = $request->input('id');
    	$update = Posts::updateStatus($id);
    }
    public function cambiarstatus2(Request $request){
    	$id = $request->input('id');
    	$update = Posts::updateStatus2($id);
    }
}
