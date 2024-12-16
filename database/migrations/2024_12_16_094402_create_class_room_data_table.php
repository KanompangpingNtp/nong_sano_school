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
        Schema::create('class_room_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_room_id')->nullable()->constrained('class_rooms')->nullOnDelete();
            $table->foreignId('subjects_id')->nullable()->constrained('subjects')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_room_data');
    }
};
