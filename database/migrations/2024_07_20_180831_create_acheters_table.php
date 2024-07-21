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
        Schema::create('acheters', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user_acheter'); 
            $table->integer('revenu_jour'); 
            $table->integer('montan_achat'); 
            $table->integer('id_machine_acheter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acheters');
    }
};
