<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $guarded = [];

    public function uangmasuk()
    {
        return $this->hasMany(Uangmasuk::class, 'warga_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'warga_id', 'id'); // Ubah ke foreign key yang sesuai
    }
}
