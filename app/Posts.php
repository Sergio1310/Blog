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

    public static function GenerarPost($id,$usuario,$titulo,$vmovil,$vweb,$imagen,$contenido){
    	DB::table('post')->insert([
    	'id' => $id,
    	 'titulo' => $titulo,
    	 'usuario' => $usuario,
    	 'videoWeb' => $vweb,
    	 'videoMovil' => $vmovil,
    	 'imagen' => $imagen,
    	 'status' => 1,
    	 'contenido' => $contenido
		]);

		DB::table('likes')->insert([
    	'id_post' => $id,
    	 'nlike' => 0,
    	 'ndislike' => 0
		]);
    }
}
