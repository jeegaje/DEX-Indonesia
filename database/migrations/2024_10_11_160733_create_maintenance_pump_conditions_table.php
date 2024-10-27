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
        Schema::create('maintenance_pump_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('pump_body')->nullable();
            $table->string('wearing_ring')->nullable();
            $table->string('pump_bolt')->nullable();
            $table->string('column_pipe_bolt')->nullable();
            $table->string('impeller')->nullable();
            $table->string('cable')->nullable();
            $table->string('pump_condition')->nullable();

            $table->string('pump_body_note')->nullable();
            $table->string('wearing_ring_note')->nullable();
            $table->string('pump_bolt_note')->nullable();
            $table->string('column_pipe_bolt_note')->nullable();
            $table->string('impeller_note')->nullable();
            $table->string('cable_note')->nullable();
            $table->string('pump_condition_note')->nullable();
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_pump_conditions');
    }
};
