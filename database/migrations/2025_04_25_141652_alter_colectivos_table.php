<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{

        Schema::table('colectivos', function (Blueprint $table) {

            $table->enum('estado', ['Disponible', 'En Mantenimiento'])->change();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('colectivos', function (Blueprint $table) {
            $table->char('estado')->change();
        });
    }
};
