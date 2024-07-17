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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('telephone')->unique(); 
            $table->string('motpass'); 
            $table->integer('codeparain')->default(3250); 
            //$table->integer('id_genere')->nullable();
            $table->integer('id_genere')->unique();
            $table->string('nom_carte')->nullable();
            $table->string('moyen_retrait')->nullable();
            $table->integer('numero_retrait_address')->nullable();
            $table->integer('numero_retrait')->nullable();
            $table->integer('mon_code')->nullable();
            $table->integer('solde_user')->default(100); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
