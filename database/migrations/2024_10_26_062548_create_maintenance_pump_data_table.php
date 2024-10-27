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
        Schema::create('maintenance_pump_data', function (Blueprint $table) {
            $table->id();
            $table->string('technician')->nullable();
            $table->string('location')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('flow_and_head')->nullable();
            $table->integer('unit')->nullable();
            $table->integer('number_of_inspection')->nullable();
            $table->decimal('running_hours_total', 9, 2)->nullable();
            $table->decimal('running_hours_monthly', 9, 2)->nullable();
            $table->string('running_hours_total_image')->nullable();
            $table->string('running_hours_monthly_image')->nullable();    
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_pump_data');
    }
};
