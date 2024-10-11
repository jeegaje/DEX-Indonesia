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
        Schema::create('maintenance_documentations', function (Blueprint $table) {
            $table->id();
            $table->string('tightening_panel_bolts');
            $table->string('cleaning_panel_with_brush');
            $table->string('panel_condition_after_cleaning');
            $table->string('cleaning_panel_with_cloth');
            $table->string('cleaning_panel_with_vacuum');
            $table->string('output_flow_45_hz');
            $table->string('output_flow_40_hz');
            $table->string('output_flow_50_hz');
            $table->string('junction_box_after_cleaning');
            $table->string('pump_cleaning');
            $table->string('water_level');
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_documentations');
    }
};
