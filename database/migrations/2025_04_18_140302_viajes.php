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
        Schema::create('viajes', function (Blueprint $table) {

            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('id_ruta')->unsigned();
            $table->string('origen');
            $table->string('destino');
            $table->char('duracion', length: 20);
            $table->decimal('distancia', total: 8, places: 2);
            $table->decimal('precio', total: 8, places: 2);
            $table->timestamps();

            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete("cascade");

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
