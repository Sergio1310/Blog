<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ApiModel extends Model
{
    public static function getPosts(){
    	return DB::table('post AS p')
    	->join('likes AS l', 'l.id_post','p.id')	
    	->select('p.id','p.titulo','p.usuario','p.imagen','p.contenido','l.nlike','l.ndislike','p.status','p.imagen','p.videoMovil')
    	->where('p.status',1)
    	->get();
    }

    public static function getPostById($id){
    	return DB::table('post AS p')
    	->join('likes AS l', 'l.id_post','p.id')	
    	->select('p.id','p.titulo','p.usuario','p.video','p.imagen','p.contenido','l.nlike','l.ndislike','p.status')
    	->where([
            ['p.status',1],
            ['p.id',$id]
        ])->get();
    }

    public static function getUsuario(){
    	return DB::table('usuario')->get();
    }
}
