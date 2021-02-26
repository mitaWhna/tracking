<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Tracking;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
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
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index',compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('rw.create',compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validatedData = $request->validate([
            'nama_rw' => 'required|unique:rws',
        ],[
            // 'kode_provinsi.required' => 'Kode Harus Di Isi',
            // 'kode_provinsi.max' => 'Kode Maksimal 4 Nomer',
            // 'kode_provinsi.unique' => 'kode Sudah dipakai',
            'nama_rw.required' => 'Nama Rw Harus Di Isi',
            // 'nama_provinsi.unique' => 'Kode Sudah Di Pakai',
        ]);

        $rw = new Rw();
        $rw->nama_rw= $request->nama_rw;
        $rw->id_kelurahan= $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index') ->with(['message'=>'Data berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = kelurahan::all();
        return view('rw.edit', compact('rw','kelurahan'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rw = Rw::findOrFail($id);
        $rw->nama_rw=$request->nama_rw;
        $rw->id_kelurahan= $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')->with(['message'=>'Data berhasil dihapus']);
    }
}
