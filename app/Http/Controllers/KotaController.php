<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kota = Kota::with('provinsi')->get();
        return view('kota.index',compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('kota.create',compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_kota' => 'required|unique:kotas',
            'nama_kota' => 'required|unique:kotas',
        ],[
            'kode_kota.required' => 'Kode Kota Harus Di Isi',
            'kode_kota.unique' => 'kode Sudah dipakai',
            'nama_kota.required' => 'Nama Kota Harus Di Isi',
            'nama_kota.unique' => 'Nama Kota Sudah Di Pakai',
        ]);
        $kota = new Kota();
        $kota->kode_kota= $request->kode_kota;
        $kota->nama_kota= $request->nama_kota;
        $kota->id_provinsi= $request->id_provinsi;
        $kota->save();
        return redirect()->route('kota.index') ->with(['message'=>'Data berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kota = Kota::findOrFail($id);
        return view('kota.show', compact('kota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
        return view('kota.edit', compact('kota','provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $kota = Kota::findOrFail($id);
        $kota->kode_kota=$request->kode_kota;
        $kota->nama_kota=$request->nama_kota;
        $kota->id_provinsi= $request->id_provinsi;
        $kota->save();
        return redirect()->route('kota.index')->with(['message'=>'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->route('kota.index')->with(['message'=>'Data berhasil dihapus']);
    }
}
