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
        Schema::create('maintenance_insulations', function (Blueprint $table) {
            $table->id();
            $table->integer('u1_pe')->nullable();
            $table->integer('v1_pe')->nullable();
            $table->integer('w1_pe')->nullable();
            $table->integer('u2_pe')->nullable();
            $table->integer('v2_pe')->nullable();
            $table->integer('w2_pe')->nullable();
            $table->integer('u1_v2')->nullable();
            $table->integer('u1_w2')->nullable();
            $table->integer('v1_u2')->nullable();
            $table->integer('v1_w2')->nullable();
            $table->integer('w1_u2')->nullable();
            $table->integer('w1_v2')->nullable();

            $table->string('u1_pe_image_path')->nullable();
            $table->string('v1_pe_image_path')->nullable();
            $table->string('w1_pe_image_path')->nullable();
            $table->string('u2_pe_image_path')->nullable();
            $table->string('v2_pe_image_path')->nullable();
            $table->string('w2_pe_image_path')->nullable();
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_insulations');
    }
};
