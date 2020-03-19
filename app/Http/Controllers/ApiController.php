<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ApiModel;
use DB;

class ApiController extends Controller
{
    public function getPost(){
        $posts = ApiModel::getPosts();
    	return  response()->json(['posts' => $posts]);
    }

    public function getPostId($id){
        $post = ApiModel::getPostById($id);
    	return  response($post);
    }

    public function usuarios(){
        $Usuario = ApiModel::getUsuario();
        return response()->json(['usuario' => $Usuario]);
    }
}
