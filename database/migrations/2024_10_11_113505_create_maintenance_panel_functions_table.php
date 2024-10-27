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
        Schema::create('maintenance_panel_functions', function (Blueprint $table) {
            $table->id();
            $table->string('rst_indicator')->nullable();
            $table->string('pump_on_indicator')->nullable();
            $table->string('cable_bolt_connection')->nullable();
            $table->string('vsd_standby_indicator')->nullable();
            $table->string('drive_monitor')->nullable();
            $table->string('sensor_monitor')->nullable();
            $table->string('power_meter_monitor')->nullable();
            $table->string('moa_selector')->nullable();
            $table->string('start_button')->nullable();
            $table->string('stop_button')->nullable();
            $table->string('reset_button')->nullable();
            $table->string('emergency_button')->nullable();
            $table->string('exhaust_fan')->nullable();
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_panel_functions');
    }
};
