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
        Schema::create('maintenance_sensor_tests', function (Blueprint $table) {
            $table->id();
            $table->string('indicator');
            $table->string('temperature_sensor');
            $table->string('wlc_sensor');
            $table->string('voltage_sensor');
            $table->string('vsd_sensor');
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_sensor_tests');
    }
};
