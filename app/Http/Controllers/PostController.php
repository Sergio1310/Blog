<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    public function index(){
    	$posts = posts::getPost();
    	return view('index')
    	->with("posts",$posts);
    }
}
