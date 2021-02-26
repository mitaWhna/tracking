@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Lihat Provinsi</div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                    <input type="number" value="{{$provinsi->kode_provinsi}}" class="form-control" name="kode_provinsi" readonly>
                </div>
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                    <input type="text" value="{{$provinsi->nama_provinsi}}" class="form-control" name="nama_provinsi" readonly>
                </div>
                </form>
                
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
