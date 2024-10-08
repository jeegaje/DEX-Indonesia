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
        Schema::create('pumps', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('serial_number')->unique();
            $table->string('flowa_and_head');
            $table->integer('unit');
            $table->integer('number_of_inspection');
            $table->decimal('running_hours_total', 9, 2);
            $table->decimal('running_hours_monthly', 9, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pumps');
    }
};
