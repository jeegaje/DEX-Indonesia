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
            $table->string('tightening_panel_bolts')->nullable();
            $table->string('cleaning_panel_with_cloth')->nullable();
            $table->string('cleaning_panel_with_brush')->nullable();
            $table->string('cleaning_panel_with_vacuum')->nullable();
            $table->string('panel_condition_after_cleaning')->nullable();
            $table->string('junction_box_after_cleaning')->nullable();
            $table->string('water_level')->nullable();
            $table->string('pump_cleaning')->nullable();
            $table->string('lifting_pump')->nullable();
            $table->string('cleaning_pump_body')->nullable();
            $table->string('polishing_wearing_ring')->nullable();
            $table->string('replacing_pump_oil')->nullable();
            $table->string('tightening_pump_bolts')->nullable();
            $table->string('cleaning_pump_impeller')->nullable();
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
