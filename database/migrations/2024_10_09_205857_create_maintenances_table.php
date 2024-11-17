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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('maintenance_type');
            $table->string('maintenance_status');
            $table->date('inspection_date');
            $table->string('technician_note')->nullable();
            $table->text('technician_signature')->nullable();
            $table->text('operator_signature')->nullable();
            $table->foreignId('pump_id')->nullable()->constrained('pumps')->onDelete('set null'); 
            $table->foreignId('technician_id')->nullable()->constrained('users')->onDelete('set null'); 
            $table->foreignId('approved_by')->nullable()->constrained('users')->onDelete('set null'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
