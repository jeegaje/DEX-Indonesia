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
        Schema::create('maintenance_resistances', function (Blueprint $table) {
            $table->id();
            $table->integer('pe_pe')->nullable();
            $table->integer('u1_u2')->nullable();
            $table->integer('v1_v2')->nullable();
            $table->integer('w1_w2')->nullable();
            $table->string('pe_pe_image_path')->nullable();
            $table->string('u1_u2_image_path')->nullable();
            $table->string('v1_v2_image_path')->nullable();
            $table->string('w1_w2_image_path')->nullable();
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_resistances');
    }
};
