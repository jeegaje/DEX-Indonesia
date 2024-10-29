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
        Schema::create('maintenance_junction_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('cable_bolt_connection')->nullable();
            $table->string('cable_condition')->nullable();
            $table->string('connection_neatness')->nullable();
            $table->integer('humidity_inside_box')->nullable();
            $table->integer('temperature_inside_box')->nullable();
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
        Schema::dropIfExists('maintenance_junction_boxes');
    }
};
