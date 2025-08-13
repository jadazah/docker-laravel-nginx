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
        Schema::table('hnominas', function (Blueprint $table) {
            $table->foreign(['idnomina'], 'idnomina')->references(['id'])->on('tipos_nominas')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hnominas', function (Blueprint $table) {
            $table->dropForeign('idnomina');
        });
    }
};
