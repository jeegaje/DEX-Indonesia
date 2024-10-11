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
            $table->string('pump_body');
            $table->string('wearing_ring');
            $table->string('pump_bolt');
            $table->string('column_pipe_bolt');
            $table->string('impeller');
            $table->string('cable');
            $table->string('pump_condition');

            $table->string('pump_body_note');
            $table->string('wearing_ring_note');
            $table->string('pump_bolt_note');
            $table->string('column_pipe_bolt_note');
            $table->string('impeller_note');
            $table->string('cable_note');
            $table->string('pump_condition_note');
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
