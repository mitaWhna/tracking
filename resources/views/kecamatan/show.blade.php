@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Kecamatan</div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputPassword1" class="form-label">Kode Kecamatan</label>
                    <input type="text" value="{{$kecamatan->kode_kecamatan}}" class="form-control" name="kode_kecamatan" readonly>
                </div>
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                    <input type="text" value="{{$kecamatan->nama_kecamatan}}" class="form-control" name="nama_kecamatan" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                    <input type="text" value="{{$kecamatan->kota->nama_kota}}" class="form-control" name="id_kota" readonly>
                </form>
                
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
