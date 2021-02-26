@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Edit Provinsi</div>
            <div class="card-body">
            <form action="{{ route('provinsi.update', $provinsi->id) }}" method="POST">
                @csrf
                @method("PUT")
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                    <input type="number" name="kode_provinsi" class="form-control" value="{{$provinsi->kode_provinsi}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                    <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nama_provinsi}}" required>
                </div>
                <button class="btn btn-primary" type="submit">Edit Data</button>
                
                </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
