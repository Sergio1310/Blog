<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ApiModel;
use DB;

class ApiController extends Controller
{
    public function getPost(){
        $post = ApiModel::getPosts();
    	return  $post;
    }

    public function getPostId($id){
        $post = ApiModel::getPostById($id);
    	return  $post;
    }
}
