<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $fillable = ['nama_rw','id_rw'];
    protected $table = "rws";

    public function Kelurahan(){
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }


    public function tracking(){
        return $this->hasMany(Tracking::class, 'id_tracking');
    }
    
}
