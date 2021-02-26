<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kecamatan','id_kecamatan'];
    protected $table = "kelurahans";

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function Rw(){
        return $this->hasMany(Rw::class);
    }
}
