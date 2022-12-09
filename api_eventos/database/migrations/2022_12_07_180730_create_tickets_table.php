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
        Schema::create('tickets', function (Blueprint $table) {
            $table->integer('cod_ticket');
            $table->integer('cod_evento');
            $table->string('rut_cliente',50);
            $table->primary(['cod_ticket','cod_evento','rut_cliente']);
            $table->foreign('cod_evento')->references('cod_evento')->on('eventos');
            $table->foreign('rut_cliente')->references('rut_cliente')->on('clientes');
            $table->softDeletes();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
