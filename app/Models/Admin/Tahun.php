<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $guarded = [];

    public function bulan()
    {
        return $this->hasMany(Bulan::class, 'tahun_id');
    }
}
