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
        Schema::create('reservationcours', function (Blueprint $table) {
            $table->id();
            $table->string('heure_reservation');
            $table->string('jour_reservation');
            $table->bigInteger('id_apprenant');
            $table->boolean('status')->default('attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservationcours');
    }
};
