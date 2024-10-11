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
        Schema::create('maintenance_electro_mechanicals', function (Blueprint $table) {
            $table->id();
            $table->integer('40_hz_power');
            $table->string('40_hz_power_image_path');
            $table->integer('45_hz_power');
            $table->string('45_hz_power_image_path');
            $table->integer('50_hz_power');
            $table->string('50_hz_power_image_path');
            $table->integer('40_hz_current');
            $table->string('40_hz_current_image_path');
            $table->integer('45_hz_current');
            $table->string('45_hz_current_image_path');
            $table->integer('50_hz_current');
            $table->string('50_hz_current_image_path');
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_electro_mechanicals');
    }
};
