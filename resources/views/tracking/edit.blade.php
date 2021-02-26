@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Edit Tracking</div>
            <div class="card-body">
            <form action="{{ route('tracking.update', $tracking->id) }}" method="POST">
                @csrf
                @livewireStyles
                    
                @livewireScripts
                @method("PUT")
                <div>
                    @livewire('statecity',['selectedState5' => $tracking->id_rw])
                </div>
                <br><h2 align="center"><b><u> Status Kasus</u><b></h3>
                <div class="mb-3">
                    <label for="exampleformControlSelect1" class="form-label">RW</label>
                    <select class="form-control" name="id_rw" id="exampleformControlSelect1">
                        @foreach($rw as $data)
                            <option value="{{$data->id}}"
                            @if($data->nama_rw == $tracking->rw->nama_rw)
                                selected
                            @endif
                            >
                            {{$data->nama_rw}}
                            </option>
                        @endforeach
                    </select>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Possitif</label>
                    <input type="number" name="positif" class="form-control" value="{{$tracking->positif}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Sembuh</label>
                    <input type="number" name="sembuh" class="form-control" value="{{$tracking->sembuh}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Meninggal</label>
                    <input type="number" name="meninggal" class="form-control" value="{{$tracking->meninggal}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{$tracking->tanggal}}" required>
                </div>
                <button class="btn btn-primary" type="submit">Edit Data</button>
                
                </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
