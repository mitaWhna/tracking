@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> kota</div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                    <input type="number" value="{{$kota->kode_kota}}" class="form-control" name="kode_kota" readonly>
                </div>
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                    <input type="text" value="{{$kota->nama_kota}}" class="form-control" name="nama_kota" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                    <input type="text" value="{{$kota->provinsi->nama_provinsi}}" class="form-control" name="id_provinsi" readonly>
                </form>
                
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
