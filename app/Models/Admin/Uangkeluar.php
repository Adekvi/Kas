<?php

namespace App\Models\Admin;

use App\Models\Admin\Bulan;
use Illuminate\Database\Eloquent\Model;

class Uangkeluar extends Model
{
    protected $guarded = [];

    public function bulan()
    {
        return $this->belongsTo(Bulan::class, 'bulan_id');
    }
}
