<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class posts extends Model
{
    public static function getPost(){
    	return  DB::table('post')->get();
    }
}
