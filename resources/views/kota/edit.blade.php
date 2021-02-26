@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Edit Kota</div>
            <div class="card-body">
            <form action="{{ route('kota.update', $kota->id) }}" method="POST">
                @csrf
                @method("PUT")              
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                    <input type="number" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama kota</label>
                    <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleformControlSelect1" class="form-label">Provinsi</label>
                    <select class="form-control" name="id_provinsi" id="exampleformControlSelect1">
                        @foreach($provinsi as $data)
                            <option value="{{$data->id}}"
                            @if($data->nama_provinsi == $kota->provinsi->nama_provinsi)
                                selected
                            @endif
                            >
                            {{$data->nama_provinsi}}
                            </option>
                        @endforeach
                    </select>
                <button class="btn btn-primary" type="submit">Edit Data</button>               
                </form>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
