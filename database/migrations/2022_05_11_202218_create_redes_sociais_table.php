<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //function criada , as redes socias serão salvas em integer pois com isso sera mais fácil a listagem de mais populares de forma descrescente
        Schema::create('redes_sociais', function (Blueprint $table) {
            $table->id();
            $table->string('redes');
            $table->integer('quantities');
            // $table->integer('twitter');
            // $table->integer('whats');
            // $table->integer('soundCloud');
            // $table->integer('Youtube');
            // $table->integer('Flickr');
            // $table->integer('LinkedIn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redes_sociais');
    }
};
