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
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->integer('numero_payeur')->nullable();
            $table->integer('transaction_id')->nullable();
            $table->integer('status_recharge')->default(1);
            $table->string('operateur');
            $table->string('address_si_usdt')->nullable();

            $table->string('image_recharge')->nullable();
            $table->integer('id_user');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recharges');
    }
};
