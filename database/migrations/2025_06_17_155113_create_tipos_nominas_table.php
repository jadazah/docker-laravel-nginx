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
        Schema::create('tipos_nominas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('nomina', 3);
            $table->char('descripcio', 49);
            $table->char('borrado', 1);
            $table->char('retener', 1);
            $table->char('recibo', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_nominas');
    }
};
