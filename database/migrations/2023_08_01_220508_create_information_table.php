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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->text('cuidad');
            $table->string('telefono',45);
            //cresmos el campo para albergar unallave foranea
            $table->unsignedBigInteger('estudiante_id')->unique();
             //cramos la relacion a nivel de migraciones
             $table->foreign('estudiante_id')
             ->references('id')
             ->on('estudiantes')
             ->onDelete('cascade')
             ->onUpdate('cascade');

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
        Schema::dropIfExists('information');
    }
};
