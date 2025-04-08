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
        Schema::create('uangmasuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warga_id')->nullable()->constrained('wargas')->onDelete('cascade');
            $table->integer('jumlah'); // Gunakan integer untuk angka
            // $table->foreignId('bulan_id')->nullable()->constrained('bulans')->nullOnDelete();
            $table->boolean('status')->default(false);
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uangmasuks');
    }
};
