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
        Schema::create('maintenance_lvmdps', function (Blueprint $table) {
            $table->id();
            $table->string('indicator_light_rst');
            $table->string('voltage_balance');
            $table->integer('frequency');
            $table->integer('v1');
            $table->integer('v2');
            $table->integer('v3');
            $table->foreignId('maintenance_id')->constrained('maintenances')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_lvmdps');
    }
};
