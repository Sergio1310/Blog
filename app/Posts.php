<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class posts extends Model
{
    public static function getPost(){
    	return  DB::table('post AS p')->leftjoin('likes AS l', 'l.id_post','p.id')
    	->select('p.id','p.titulo','p.usuario','p.video','p.imagen','p.contenido','l.nlike','l.ndislike')
    	->where('p.status',1)
    	->get();
    }
}
