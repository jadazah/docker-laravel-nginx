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
        Schema::create('hnominas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('udp', 3);
            $table->char('ct', 10);
            $table->char('filiacio', 13);
            $table->char('curp', 18);
            $table->char('nombre', 60);
            $table->char('plaza', 21);
            $table->char('mot_pla', 2);
            $table->char('stat_pla', 2);
            $table->char('desde', 6);
            $table->char('hasta', 6);
            $table->char('cheque', 9);
            $table->decimal('importe');
            $table->dateTime('ufecmov')->nullable();
            $table->char('usuario', 10);
            $table->char('vstatus', 4);
            $table->char('nomina', 3);
            $table->char('quincena', 7);
            $table->char('area', 20);
            $table->char('tipocheque', 1);
            $table->char('sede', 50);
            $table->char('banco', 1);
            $table->char('fpago', 10);
            $table->decimal('imprimir', 1, 0);
            $table->char('estadop', 1);
            $table->integer('idnomina')->index('idnomina');
            $table->char('tiponomina', 1);
            $table->char('numnomina', 1);
            $table->char('quincena2', 7);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hnominas');
    }
};
