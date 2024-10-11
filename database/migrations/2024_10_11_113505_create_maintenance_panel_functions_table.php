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
            $table->string('rst_indicator');
            $table->string('pump_on_indicator');
            $table->string('vsd_standby_indicator');
            $table->string('drive_monitor');
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
