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
            $table->integer('u1_pe');
            $table->integer('v1_pe');
            $table->integer('w1_pe');
            $table->integer('u2_pe');
            $table->integer('v2_pe');
            $table->integer('w2_pe');
            $table->integer('u1_v2');
            $table->integer('u1_w2');
            $table->integer('v1_u2');
            $table->integer('v1_w2');
            $table->integer('w1_u2');
            $table->integer('w1_v2');

            $table->string('u1_pe_image_path');
            $table->string('v1_pe_image_path');
            $table->string('w1_pe_image_path');
            $table->string('u2_pe_image_path');
            $table->string('v2_pe_image_path');
            $table->string('w2_pe_image_path');
            $table->string('u1_v2_image_path');
            $table->string('u1_w2_image_path');
            $table->string('v1_u2_image_path');
            $table->string('v1_w2_image_path');
            $table->string('w1_u2_image_path');
            $table->string('w1_v2_image_path');
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
