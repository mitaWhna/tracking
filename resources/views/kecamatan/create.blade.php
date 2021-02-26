@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Data Kecamatan</div>
            <div class="card-body">
            <form action="{{route('kecamatan.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Kode Kecamatan</label>
                    <input type="number" name="kode_kecamatan" class="form-control  @error('kode_kecamatan') is-invalid @enderror" >
                    @error('kode_kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nama Kecamatan</label>
                    <input type="text" name="nama_kecamatan" class="form-control @error('kode_kecamatan') is-invalid @enderror" >
                    @error('kode_kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Nama Kota</label>
                    <select class="form-control @error('nama_kota') is-invalid @enderror" name="id_kota">
                        @foreach($kota as $data)
                            <option value="{{$data->id}}">{{$data->nama_kota}}</option>
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
