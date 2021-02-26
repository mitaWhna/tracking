@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Data Kota</div>
            <div class="card-body">
            <form action="{{route('kota.store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="" class="form-label">Kode Kota</label>
                    <input type="text" name="kode_kota" class="form-control" >
                    @if($errors->has('kode_kota'))
                        <span class="text-danger"> {{ $errors->first('kode_kota')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nama Kota</label>
                    <input type="text" name="nama_kota" class="form-control @error('nama_kota') is-invalid @enderror" >
                    @if($errors->has('nama_kota'))
                        <span class="text-danger"> {{ $errors->first('nama_kota')}}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="">Nama Provinsi</label>
                    <select class="form-control " name="id_provinsi">
                        @foreach($provinsi as $data)
                            <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
