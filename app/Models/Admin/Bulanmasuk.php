<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Bulanmasuk extends Model
{
    protected $guarded = [];

    public function uangMasuk()
    {
        return $this->belongsTo(UangMasuk::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function bulan()
    {
        return $this->belongsTo(Bulan::class);
    }
}
