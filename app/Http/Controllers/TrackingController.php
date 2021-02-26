<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class TrackingController extends Controller
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
        $tracking = Tracking::with('rw')->get();
        return view('tracking.index',compact('tracking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        return view('tracking.create',compact('rw'));
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
            'positif' => 'required|unique:trackings',
            'sembuh' => 'required|unique:trackings',
            'meninggal' => 'required|unique:trackings',
            'tanggal' => 'required|unique:trackings',
        ],[
            'positif.required' => 'Kode Harus Di Isi',
            'sembuh.required' => 'Kode Harus Di Isi',
            'meninggal.required' => 'Kode Harus Di Isi',
            'tanggal.required' => 'Kode Harus Di Isi',
            
        ]);
        $tracking = new Tracking();
        $tracking->positif= $request->positif;
        $tracking->sembuh= $request->sembuh;
        $tracking->meninggal= $request->meninggal;
        $tracking->tanggal= $request->tanggal;
        $tracking->id_rw= $request->id_rw;
        $tracking->save();
        return redirect()->route('tracking.index')->with(['message'=>'Data berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tracking = Tracking::findOrFail($id);
        return view('tracking.show', compact('tracking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tracking = Tracking::findOrFail($id);
        $rw = Rw::all();
        return view('tracking.edit', compact('tracking','rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tracking = Tracking::findOrFail($id);
        $tracking->positif=$request->positif;
        $tracking->sembuh=$request->sembuh;
        $tracking->meninggal=$request->meninggal;
        $tracking->tanggal=$request->tanggal;
        $tracking->id_rw= $request->id_rw;
        $tracking->save();
        return redirect()->route('tracking.index')->with(['message'=>'Data berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tracking = Tracking::findOrFail($id);
        $tracking->delete();
        return redirect()->route('tracking.index')->with(['message'=>'Data berhasil dihapus']);
    }
}
