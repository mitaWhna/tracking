@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Edit RW</div>
            <div class="card-body">
            <form action="{{ route('rw.update', $rw->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                    <input type="text" name="nama_rw" class="form-control" value="{{$rw->nama_rw}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleformControlSelect1" class="form-label">RW</label>
                    <select class="form-control" name="id_kelurahan" id="exampleformControlSelect1">
                        @foreach($kelurahan as $data)
                            <option value="{{$data->id}}"
                            @if($data->nama_kelurahan == $rw->kelurahan->nama_kelurahan)
                                selected
                            @endif
                            >
                            {{$data->nama_kelurahan}}
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
