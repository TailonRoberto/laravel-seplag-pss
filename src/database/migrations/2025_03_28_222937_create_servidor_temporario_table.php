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
        Schema::create('servidor_temporario', function (Blueprint $table) {
            $table->unsignedBigInteger('pes_id')->primary();
            $table->date('st_data_admissao')->nullable();
            $table->date('st_data_demissao')->nullable();

            $table->foreign('pes_id')->references('pes_id')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servidor_temporario');
    }
};
