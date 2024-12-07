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
        Schema::create('maintenance_meggers', function (Blueprint $table) {
            $table->id();
            $table->string('technician')->nullable();
            $table->string('location')->nullable();
            $table->integer('unit')->nullable();
            $table->string('serial_number')->nullable();
            $table->decimal('running_hours', 9, 2)->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('maintenance_meggers');
    }
};
