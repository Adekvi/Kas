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
        Schema::create('kasbesars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('masuk_id')->constrained('uangmasuks')->onDelete('cascade');
            $table->foreignId('keluar_id')->constrained('uangkeluars')->onDelete('cascade');
            $table->foreignId('tahun_id')->constrained('tahuns')->onDelete('cascade');
            $table->foreignId('bulan_id')->constrained('bulans')->onDelete('cascade');
            $table->foreignId('sumbangan_id')->nullable()->constrained('sumbangans')->onDelete('set null');
            $table->integer('total_saldo');
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
        Schema::dropIfExists('kasbesars');
    }
};
