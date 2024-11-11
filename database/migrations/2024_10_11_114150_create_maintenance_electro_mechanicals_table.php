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
            $table->float('40_hz_kw')->nullable();
            $table->string('40_hz_kw_image_path')->nullable();
            $table->float('45_hz_kw')->nullable();
            $table->string('45_hz_kw_image_path')->nullable();
            $table->float('50_hz_kw')->nullable();
            $table->string('50_hz_kw_image_path')->nullable();

            $table->float('40_hz_amper')->nullable();
            $table->string('40_hz_amper_image_path')->nullable();
            $table->float('45_hz_amper')->nullable();
            $table->string('45_hz_amper_image_path')->nullable();
            $table->float('50_hz_amper')->nullable();
            $table->string('50_hz_amper_image_path')->nullable();

            $table->float('40_hz_rpm')->nullable();
            $table->string('40_hz_rpm_image_path')->nullable();
            $table->float('45_hz_rpm')->nullable();
            $table->string('45_hz_rpm_image_path')->nullable();
            $table->float('50_hz_rpm')->nullable();
            $table->string('50_hz_rpm_image_path')->nullable();

            $table->float('40_hz_torsi')->nullable();
            $table->string('40_hz_torsi_image_path')->nullable();
            $table->float('45_hz_torsi')->nullable();
            $table->string('45_hz_torsi_image_path')->nullable();
            $table->float('50_hz_torsi')->nullable();
            $table->string('50_hz_torsi_image_path')->nullable();

            $table->float('40_hz_winding_temperature')->nullable();
            $table->string('40_hz_winding_temperature_image_path')->nullable();
            $table->float('45_hz_winding_temperature')->nullable();
            $table->string('45_hz_winding_temperature_image_path')->nullable();
            $table->float('50_hz_winding_temperature')->nullable();
            $table->string('50_hz_winding_temperature_image_path')->nullable();

            $table->float('40_hz_pump_humidity')->nullable();
            $table->string('40_hz_pump_humidity_image_path')->nullable();
            $table->float('45_hz_pump_humidity')->nullable();
            $table->string('45_hz_pump_humidity_image_path')->nullable();
            $table->float('50_hz_pump_humidity')->nullable();
            $table->string('50_hz_pump_humidity_image_path')->nullable();

            $table->float('40_hz_bearing_temperature')->nullable();
            $table->string('40_hz_bearing_temperature_image_path')->nullable();
            $table->float('45_hz_bearing_temperature')->nullable();
            $table->string('45_hz_bearing_temperature_image_path')->nullable();
            $table->float('50_hz_bearing_temperature')->nullable();
            $table->string('50_hz_bearing_temperature_image_path')->nullable();

            $table->float('40_hz_cable_1_temperature')->nullable();
            $table->string('40_hz_cable_1_temperature_image_path')->nullable();
            $table->float('45_hz_cable_1_temperature')->nullable();
            $table->string('45_hz_cable_1_temperature_image_path')->nullable();
            $table->float('50_hz_cable_1_temperature')->nullable();
            $table->string('50_hz_cable_1_temperature_image_path')->nullable();

            $table->float('40_hz_cable_2_temperature')->nullable();
            $table->string('40_hz_cable_2_temperature_image_path')->nullable();
            $table->float('45_hz_cable_2_temperature')->nullable();
            $table->string('45_hz_cable_2_temperature_image_path')->nullable();
            $table->float('50_hz_cable_2_temperature')->nullable();
            $table->string('50_hz_cable_2_temperature_image_path')->nullable();

            // Suhu Kabel 3
            $table->float('40_hz_cable_3_temperature')->nullable();
            $table->string('40_hz_cable_3_temperature_image_path')->nullable();
            $table->float('45_hz_cable_3_temperature')->nullable();
            $table->string('45_hz_cable_3_temperature_image_path')->nullable();
            $table->float('50_hz_cable_3_temperature')->nullable();
            $table->string('50_hz_cable_3_temperature_image_path')->nullable();

            // Vibrasi
            $table->float('40_hz_vibration')->nullable();
            $table->string('40_hz_vibration_image_path')->nullable();
            $table->float('45_hz_vibration')->nullable();
            $table->string('45_hz_vibration_image_path')->nullable();
            $table->float('50_hz_vibration')->nullable();
            $table->string('50_hz_vibration_image_path')->nullable();

            // Suara (dB)
            $table->float('40_hz_sound')->nullable();
            $table->string('40_hz_sound_image_path')->nullable();
            $table->float('45_hz_sound')->nullable();
            $table->string('45_hz_sound_image_path')->nullable();
            $table->float('50_hz_sound')->nullable();
            $table->string('50_hz_sound_image_path')->nullable();

            // Suhu Terminal
            $table->float('40_hz_terminal_temperature')->nullable();
            $table->string('40_hz_terminal_temperature_image_path')->nullable();
            $table->float('45_hz_terminal_temperature')->nullable();
            $table->string('45_hz_terminal_temperature_image_path')->nullable();
            $table->float('50_hz_terminal_temperature')->nullable();
            $table->string('50_hz_terminal_temperature_image_path')->nullable();

            $table->string('status')->nullable(); 
            $table->foreignId('approved_by')->nullable()->constrained('users')->onDelete('set null'); 
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
