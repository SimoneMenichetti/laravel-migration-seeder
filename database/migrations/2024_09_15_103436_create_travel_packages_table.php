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
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nome_pacchetto');
            $table->text('descrizione');
            $table->decimal('prezzo', 8, 2);
            $table->date('data_partenza');
            $table->date('data_ritorno');
            $table->integer('numero_giorni');
            $table->string('luogo_destinazione');
            $table->integer('numero_posti');
            $table->boolean('disponibile')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};
