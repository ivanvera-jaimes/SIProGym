<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->double("costo")->nullable();
            $table->double("estado")->nullable();
            $table->unsignedBigInteger("idPersona")->nullable();
            $table->timestamps();
            // $table->foreing('plan_id')->references('id')->on('planes')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('idPersona')->references('id')->on('personas')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
