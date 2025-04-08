<?php

namespace App\Models\Admin;

use App\Models\Admin\Bulan;
use App\Models\Admin\Warga;
use Illuminate\Database\Eloquent\Model;

class Uangmasuk extends Model
{
    protected $guarded = [];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id');
    }

    // public function bulan()
    // {
    //     return $this->belongsTo(Bulan::class, 'bulan_id');
    // }

    public function bulans()
    {
        return $this->belongsToMany(Bulan::class, 'bulanmasuks');
    }
}
