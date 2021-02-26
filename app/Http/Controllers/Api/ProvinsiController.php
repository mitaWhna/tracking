<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Tracking;

class ProvinsiController extends Controller
{
   
    public function index() //untuk menampilkan data
    {
        $provinsi = Provinsi::latest()->get();
        $res = [
            'success' =>true,
            'data' => $provinsi,
            'message' => 'data berhasil di tampilkan'
        ];
        return response()->json($res,200);
        //$res untuk menmpilkan data 
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {

    }


    
    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Provinsi',
                'data'    => $provinsi
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'Provinsi tidak ditemukan',
                'data'    => ''
            ], 404);
        }
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 500);
        }

    }
}
