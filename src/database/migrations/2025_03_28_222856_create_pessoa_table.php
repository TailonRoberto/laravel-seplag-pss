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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id('pes_id');
            $table->string('pes_nome');
            $table->date('pes_data_nascimento')->nullable();
            $table->char('pex_sexo', 1)->nullable();
            $table->string('pes_mae')->nullable();
            $table->string('pes_pai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa');
    }
};
