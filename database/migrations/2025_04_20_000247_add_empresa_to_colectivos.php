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
        Schema::table('colectivos', function (Blueprint $table) {
                $table->string('empresa')->after('id_conductor'); // Agrega la columna después de 'nombre'
            });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
            Schema::table('colectivos', function (Blueprint $table) {
                $table->dropColumn('empresa'); // Permite revertir el cambio si es necesario
            });
        
    }
};
