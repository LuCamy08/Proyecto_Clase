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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('descripcion',100);
            $table->double('precio',8,2);
            $table->string('imagen',100);
            $table->unsignedBigInteger('usuario_id');
            $table->tinyInteger('consesionado');
            $table->string('motivo',100);
            $table->integer('existencia');
            $table->integer('pendientes');

            $table->foreign('usuario_id')->references('id')->on('users')
                ->onDelete('set null');

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
        Schema::dropIfExists('productos');
    }
};
