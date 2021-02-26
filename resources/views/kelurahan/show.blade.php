@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Kelurahan</div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                    <input type="text" value="{{$kelurahan->nama_kelurahan}}" class="form-control" name="nama_kelurahan" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                    <input type="text" value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" name="id_kecamatan" readonly>
                </form>
                
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
