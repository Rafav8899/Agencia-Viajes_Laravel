<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boletos', function (Blueprint $table) {

            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('id_pasajero')->unsigned();
            $table->bigInteger('id_viaje')->unsigned();
            $table->bigInteger('id_colectivo')->unsigned();
            $table->date('fecha');
            $table->time('hora', precision: 0);
            $table->timestamps();

            $table->foreign('id_pasajero')->references('id')->on('pasajeros')->onDelete("cascade");
            $table->foreign('id_viaje')->references('id')->on('viajes')->onDelete("cascade");
            $table->foreign('id_colectivo')->references('id')->on('colectivos')->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
