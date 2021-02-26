<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Models\RW;
use App\Models\provinsi;
use DB;

class ApiController extends Controller
{

    public function indonesia() //untuk menampilkan data
    
    {
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
        $res = [
            'success'          =>true,
            'data'             => 'Data Kasus Indonesia',
            'Jumlah Positif'   => $positif,
            'Jumlah Sembuh'    => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'message'          => 'data berhasil di tampilkan'
        ];
        return response()->json($res,200);
        //$res untuk menmpilkan data 
    }

    
    public function provinsi ($id) {
        $positif = DB::table('provinsis')
                 ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                 ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                 ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                 ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                 ->join('trackings','trackings.id_rw','=','rws.id')
                 ->select('trackings.positif')
                 ->where('provinsis.id',$id)
                 ->sum('trackings.positif');
        
        $sembuh = DB::table('provinsis')
                 ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                 ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                 ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                 ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                 ->join('trackings','trackings.id_rw','=','rws.id')
                 ->select('trackings.positif')
                 ->where('provinsis.id',$id)
                 ->sum('trackings.sembuh');

        $meninggal = DB::table('provinsis')
                 ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                 ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                 ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
                 ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                 ->join('trackings','trackings.id_rw','=','rws.id')
                 ->select('trackings.positif')
                 ->where('provinsis.id',$id)
                 ->sum('trackings.meninggal');

        $provinsi = Provinsi::whereId($id)->first();

        $res = [
            'success'          =>true,
            'Provinsi'         => $provinsi['nama_provinsi'],
            'Jumlah Positif'   => $positif,
            'Jumlah Sembuh'    => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'message'          => 'data berhasil di tampilkan'
        ];
        return response()->json($res,200);

    }

        public function provinsi2() {
        $provinsi = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('trackings', 'trackings.id_rw', 'rws.id')
            ->select('nama_provinsi',
                DB::raw('sum(trackings.positif) as Positif'),
                DB::raw('sum(trackings.sembuh) as sembuh'),
                DB::raw('sum(trackings.meninggal) as meninggal'),
            )
            ->groupBy('nama_provinsi')
            ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Provinsi',
            'data' => $provinsi,
        ];
        
        return response()->json($data, 200);
    }

        public function kota() {
            $kota = DB::table('kotas')
                ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
                ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('trackings', 'trackings.id_rw', 'rws.id')
                ->select('nama_kota','kode_kota',
                    DB::raw('sum(trackings.positif) as Positif'),
                    DB::raw('sum(trackings.sembuh) as sembuh'),
                    DB::raw('sum(trackings.meninggal) as meninggal'),
                )
                ->groupBy('nama_kota','kode_kota')
                ->get();

            $data = [







                
                'status' => true,
                'message' => 'Menampilkan Kota',
                'data' => $kota,
            ];
            
            return response()->json($data, 200);
        }


        public function kecamatan() {
            $kecamatan = DB::table('kecamatans')
                ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('trackings', 'trackings.id_rw', 'rws.id')
                ->select('nama_kecamatan','kode_kecamatan',
                    DB::raw('sum(trackings.positif) as Positif'),
                    DB::raw('sum(trackings.sembuh) as sembuh'),
                    DB::raw('sum(trackings.meninggal) as meninggal'),
                )
                ->groupBy('nama_kecamatan','kode_kecamatan')
                ->get();

            $data = [
                'status' => true,
                'message' => 'Menampilkan Kecamatan',
                'data' => $kecamatan,
            ];
            
            return response()->json($data, 200);
        }

        public function kelurahan() {
            $kelurahan = DB::table('kelurahans')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('trackings', 'trackings.id_rw', 'rws.id')
                ->select('nama_kelurahan',
                    DB::raw('sum(trackings.positif) as Positif'),
                    DB::raw('sum(trackings.sembuh) as sembuh'),
                    DB::raw('sum(trackings.meninggal) as meninggal'),
                )
                ->groupBy('nama_kelurahan')
                ->get();

            $data = [
                'status' => true,
                'message' => 'Menampilkan Kecamatan',
                'data' => $kelurahan,
            ];
            
            return response()->json($data, 200);
        }

        public function global()
    {
        $url = Http::get('https://api.kawalcorona.com/global/')->json();
        $data = [ 
            'success' =>true,
            'data' => $url,
            'message' => 'Menampilkan data global'

        ];

        return response()->json($data,200);
    }

        

        
}

//->select('provinsi',
// DB::raw('sum(trackings.positif') as positif'),
// DB::raw('sum(trackings.sembuh) as sembuh'),
// DB::raw('sum(trackings.meninggal) as meninggal))
// ->groupBy('provinsi')
// ->get();
