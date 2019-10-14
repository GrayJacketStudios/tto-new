<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_particulars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RUN');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('id_empresa');
            $table->string('cargo');
            $table->integer('estado');
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
        Schema::dropIfExists('clientes_particulars');
    }
}
