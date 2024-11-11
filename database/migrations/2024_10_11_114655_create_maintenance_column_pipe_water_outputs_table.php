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
            $table->integer('water_ph_value_condition')->nullable();
            $table->string('water_ph_value_condition_image_path')->nullable();
            $table->string('column_pipe_condition')->nullable();
            $table->string('output_pipe_condition')->nullable();
            $table->string('valve_condition')->nullable();
            $table->string('flap_condition')->nullable();
            $table->string('water_output_condition')->nullable();
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
        Schema::dropIfExists('maintenance_column_pipe_water_outputs');
    }
};
