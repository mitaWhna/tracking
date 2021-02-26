@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Edit Kelurahan</div>
            <div class="card-body">
            <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                    <input type="text" name="nama_kelurahan" class="form-control" value="{{$kelurahan->nama_kelurahan}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleformControlSelect1" class="form-label">Kecamatan</label>
                    <select class="form-control" name="id_kecamatan" id="exampleformControlSelect1">
                        @foreach($kecamatan as $data)
                            <option value="{{$data->id}}"
                            @if($data->nama_kecamatan == $kelurahan->kecamatan->nama_kecamatan)
                                selected
                            @endif
                            >
                            {{$data->nama_kecamatan}}
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
