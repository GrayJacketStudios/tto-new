<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RUT');
            $table->string('fantasia');
            $table->string('nombre_legal');
            $table->string('giro');
            $table->string('razon_social');
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
        Schema::dropIfExists('clientes_empresas');
    }
}
