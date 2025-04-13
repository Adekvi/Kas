<?php

namespace App\Models\Admin;

use App\Models\Admin\Uangmasuk;
use App\Models\Admin\Uangkeluar;
use App\Models\Admin\Sumbangan;
use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    protected $guarded = [];

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun_id');
    }

    public function uangmasuks()
    {
        return $this->belongsToMany(Uangmasuk::class, 'bulanmasuks');
    }

    public function uangkeluar()
    {
        return $this->hasMany(Uangkeluar::class, 'bulan_id');
    }

    public function sumbangan()
    {
        return $this->hasMany(Sumbangan::class, 'bulan_id');
    }
}
