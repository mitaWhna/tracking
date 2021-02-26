<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $table = "trackings";
    protected $fillable = ['id_rw',' positif','sembuh','meninggal','tanggal'];
    public $timestamps = true;

    
    public function rw(){
        return $this->belongsTo(Rw::class, 'id_rw');
    }
}
