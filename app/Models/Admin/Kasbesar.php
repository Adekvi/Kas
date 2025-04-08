<?php

namespace App\Models\Admin;

use App\Models\Admin\Bulan;
use App\Models\Admin\Uangmasuk;
use App\Models\Admin\Uangkeluar;
use App\Models\Admin\Sumbangan;
use Illuminate\Database\Eloquent\Model;

class Kasbesar extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($kas) {
            // Ambil saldo sebelumnya berdasarkan bulan yang sama
            $saldoSebelum = static::where('tgl_bulan', $kas->tgl_bulan)->latest()->value('total_saldo') ?? 0;

            // Ambil nilai uang masuk dan keluar berdasarkan bulan yang sama
            $uangMasuk = $kas->uangmasuk()->where('bulan_id', $kas->bulan_id)->sum('jumlah') ?? 0;
            $uangKeluar = $kas->uangkeluar()->where('bulan_id', $kas->bulan_id)->sum('nominal') ?? 0;

            // Hitung total saldo baru
            $kas->total_saldo = $saldoSebelum + $uangMasuk - $uangKeluar;
        });
    }

    // Fungsi untuk menghitung total saldo berdasarkan bulan_id, masuk_id, dan keluar_id
    public static function calculateTotalSaldo($bulanId, $masukId, $keluarId)
    {
        // Ambil saldo sebelumnya berdasarkan bulan yang sama
        $saldoSebelum = self::where('tgl_bulan', $bulanId)->latest()->value('total_saldo') ?? 0;

        // Ambil nilai uang masuk dan keluar berdasarkan bulan_id dan id yang dipilih
        $uangMasuk = $masukId ? Uangmasuk::where('id', $masukId)->where('bulan_id', $bulanId)->sum('jumlah') : 0;
        $uangKeluar = $keluarId ? Uangkeluar::where('id', $keluarId)->where('bulan_id', $bulanId)->sum('nominal') : 0;

        // Hitung total saldo baru
        return $saldoSebelum + $uangMasuk - $uangKeluar;
    }

    // ✅ Gunakan belongsTo karena satu kas hanya punya satu uang masuk dan keluar
    public function uangmasuk()
    {
        return $this->belongsTo(Uangmasuk::class, 'masuk_id');
    }

    public function uangkeluar()
    {
        return $this->belongsTo(Uangkeluar::class, 'keluar_id');
    }

    public function sumbangan()
    {
        return $this->belongsTo(Sumbangan::class, 'sumbangan_id');
    }

    public function bulan()
    {
        return $this->belongsTo(Bulan::class, 'bulan_id');
    }
}
