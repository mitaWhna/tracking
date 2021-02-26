<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use DB;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Rw;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Tracking;




class FrontendController extends Controller
{
    public function index(){

        $positif = DB::table('rws')
        ->select('trackings.positif',
        'trackings.jumlah_sembuh','trackings.meinggal')
        ->join('trackings','rws.id','=','trackings.id_rw')
        ->sum('trackings.positif');
   
        $sembuh = DB::table('rws')
                ->select('trackings.positif',
                'trackings.jumlah_sembuh','trackings.meinggal')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->sum('trackings.sembuh');

        $meninggal = DB::table('rws')
                ->select('trackings.positif',
                'trackings.jumlah_sembuh','trackings.meinggal')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->sum('trackings.meninggal');

            $provinsi = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('trackings', 'trackings.id_rw', 'rws.id')
            ->select('nama_provinsi',
                DB::raw('sum(trackings.positif) as positif'),
                DB::raw('sum(trackings.sembuh) as sembuh'),
                DB::raw('sum(trackings.meninggal) as meninggal'),
            )
            ->groupBy('nama_provinsi')
            ->get();
            

            return view('frontend', compact('provinsi','positif','sembuh','meninggal'));

    }
    //Tabel Global
   
}
