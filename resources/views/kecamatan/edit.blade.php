@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Edit Kota</div>
            <div class="card-body">
            <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kode Kecamatan</label>
                    <input type="text" name="kode_kecamatan" class="form-control" value="{{$kecamatan->kode_kecamatan}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                    <input type="text" name="nama_kecamatan" class="form-control" value="{{$kecamatan->nama_kecamatan}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleformControlSelect1" class="form-label">Kota</label>
                    <select class="form-control" name="id_kota" id="exampleformControlSelect1">
                        @foreach($kota as $data)
                            <option value="{{$data->id}}"
                            @if($data->nama_kota == $kecamatan->kota->nama_kota)
                                selected
                            @endif
                            >
                            {{$data->nama_kota}}
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
