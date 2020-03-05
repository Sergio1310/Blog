<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('id');
            $table->string('titulo', 250)->default(null);
            $table->string('usuario', 250)->default(null);
            $table->string('video', 250)->default(null);
            $table->string('imagen', 250)->default(null);
            $table->text('contenido');
            $table->integer('status');
            $table->timestamps();
        
        });


        Schema::create('comentarios', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('id_post');
            $table->text('comentario');
            $table->foreign('id_post')->references('id')->on('post');
            $table->timestamps();
        
        });

        Schema::create('etiquetas', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->bigIncrements('id');
            $table->integer('tipo');
        });

        Schema::create('likes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('id_post');
            $table->integer('nlike');
            $table->integer('ndislike');
            $table->foreign('id_post')->references('id')->on('post');
            $table->timestamps();
        
        });

        Schema::create('xrefetiqueta', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->unsignedBigInteger('id_post');
            $table->unsignedBigInteger('id_etiqueta');
            $table->foreign('id_post')->references('id')->on('post');
            $table->foreign('id_etiqueta')->references('id')->on('etiquetas');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('xrefetiqueta');
        Schema::drop('post');
        Schema::drop('likes');
        Schema::drop('etiquetas');
        Schema::drop('comentarios');

    }
}
