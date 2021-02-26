<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumlah_kasus extends Model
{
    use HasFactory;

    protected $table = "jumlah_kasuses";

    public function negara(){
        return $this->hasMany(negara::class);
    }
}
