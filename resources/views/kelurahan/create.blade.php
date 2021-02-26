@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Data Kelurahan</div>
            <div class="card-body">
            <form action="{{route('kelurahan.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Nama Kelurahan</label>
                    <input type="text" name="nama_kelurahan" class="form-control @error('nama_kelurahan') is-invalid @enderror" >
                    @error('nama_kelurahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Nama Kecamatan</label>
                    <select class="form-control @error('nama_kecamatan') is-invalid @enderror" name="id_kecamatan">
                        @foreach($kecamatan as $data)
                            <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                        @endforeach
                    </select>
                    @error('nama_kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
