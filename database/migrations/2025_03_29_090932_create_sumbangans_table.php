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
        Schema::create('sumbangans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis')->default('uang');
            $table->string('uang')->nullable();
            $table->string('barang')->nullable();
            $table->foreignId('bulan_id')->nullable()->constrained('bulans')->nullOnDelete();
            $table->string('keterangan')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumbangans');
    }
};
