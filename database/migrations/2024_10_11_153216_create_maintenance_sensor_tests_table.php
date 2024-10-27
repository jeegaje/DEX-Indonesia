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


            $table->string('pump_fault_temperature_sensor')->nullable();
            $table->string('pump_fault_wlc_sensor')->nullable();
            $table->string('pump_fault_voltage_sensor')->nullable();
            $table->string('pump_fault_vsd_sensor')->nullable();

            // Low Water
            $table->string('low_water_temperature_sensor')->nullable();
            $table->string('low_water_wlc_sensor')->nullable();
            $table->string('low_water_voltage_sensor')->nullable();
            $table->string('low_water_vsd_sensor')->nullable();

            // Voltage Fault
            $table->string('voltage_fault_temperature_sensor')->nullable();
            $table->string('voltage_fault_wlc_sensor')->nullable();
            $table->string('voltage_fault_voltage_sensor')->nullable();
            $table->string('voltage_fault_vsd_sensor')->nullable();

            // VSD Vault
            $table->string('vsd_vault_temperature_sensor')->nullable();
            $table->string('vsd_vault_wlc_sensor')->nullable();
            $table->string('vsd_vault_voltage_sensor')->nullable();
            $table->string('vsd_vault_vsd_sensor')->nullable();

            // Trouble Alarm
            $table->string('trouble_alarm_temperature_sensor')->nullable();
            $table->string('trouble_alarm_wlc_sensor')->nullable();
            $table->string('trouble_alarm_voltage_sensor')->nullable();
            $table->string('trouble_alarm_vsd_sensor')->nullable();

            // Pump Trip
            $table->string('pump_trip_temperature_sensor')->nullable();
            $table->string('pump_trip_wlc_sensor')->nullable();
            $table->string('pump_trip_voltage_sensor')->nullable();
            $table->string('pump_trip_vsd_sensor')->nullable();


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
