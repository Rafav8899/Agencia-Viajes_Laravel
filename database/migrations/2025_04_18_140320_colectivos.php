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
        Schema::create('colectivos', function (Blueprint $table) {
            
            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('id_conductor')->unsigned();
            $table->char('patente', length: 250);
            $table->char('modelo', length: 250);
            $table->integer('capacidad');
            $table->char('estado', length:80);
            $table->timestamps();

            $table->foreign('id_conductor')->references('id')->on('conductores')->onDelete("cascade");

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
