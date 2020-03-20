<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class posts extends Model
{
    public static function getPost(){
    	return  DB::table('post AS p')
    	->join('likes AS l', 'l.id_post','p.id')	
    	->select('p.id','p.titulo','p.usuario','p.videoWeb','p.imagen','p.contenido','l.nlike','l.ndislike','p.status')
    	->get();
    }
    public static function updateStatus($id){
    	return DB::table('post AS p')
    	->where('id', $id)
    	->update(['status' => 0]);
    }
    public static function updateStatus2($id){
    	return DB::table('post AS p')
    	->where('id', $id)
    	->update(['status' => 1]);
    }
}
