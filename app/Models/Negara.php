<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;

    protected $table = "negaras";

    public function jumlah_kasus(){
        return $this->hasMany(Jumlah_kasus::class);
    }
}
