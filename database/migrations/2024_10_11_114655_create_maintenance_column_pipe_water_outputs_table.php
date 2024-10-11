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
        Schema::create('maintenance_column_pipe_water_outputs', function (Blueprint $table) {
            $table->id();
            $table->integer('water_ph_value_condition');
            $table->string('column_pipe_condition');
            $table->string('output_pipe_condition');
            $table->string('valve_condition');
            $table->string('flap_condition');
            $table->string('water_output_condition');
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_column_pipe_water_outputs');
    }
};
