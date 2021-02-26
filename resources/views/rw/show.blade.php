@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Rw</div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                <div class="form-group"></div>
                    <label for="exampleInputPassword1" class="form-label">Nama rw</label>
                    <input type="text" value="{{$rw->nama_rw}}" class="form-control" name="nama_rw" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                    <input type="text" value="{{$rw->kelurahan->nama_kelurahan}}" class="form-control" name="id_kelurahan" readonly>
                </form>
                
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
