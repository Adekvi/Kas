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
        Schema::create('bulanmasuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uangmasuk_id')->constrained('uangmasuks')->onDelete('cascade');
            $table->foreignId('bulan_id')->constrained('bulans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulanmasuks');
    }
};
