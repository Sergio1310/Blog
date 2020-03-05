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
}
