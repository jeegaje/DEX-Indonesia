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
            $table->string('indicator_light_rst')->nullable();
            $table->string('indicator_light_rst_detail')->nullable();
            $table->string('voltage_balance')->nullable();
            $table->string('voltage_balance_detail')->nullable();
            $table->integer('frequency')->nullable();
            $table->integer('v1')->nullable();
            $table->integer('v2')->nullable();
            $table->integer('v3')->nullable();
            $table->string('power')->nullable();
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
        Schema::dropIfExists('maintenance_lvmdps');
    }
};
