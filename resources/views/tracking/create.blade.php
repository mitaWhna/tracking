@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> Tracking</div>
            <div class="card-body">
            <form action="{{route('tracking.store')}}" method="POST">
                @csrf
                @livewireStyles
                        @livewire('statecity')
                @livewireScripts
                


                <div class="mb-3">
                    <label for="">Nama RW</label>
                    <select class="form-control  @error('nama_rw') is-invalid @enderror" name="id_rw">
                        @foreach($rw as $data)
                            <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                        @endforeach
                    </select>         
                    @error('nama_rw')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jumlah Positif</label>
                    <input type="number" name="positif" class="form-control  @error('positif') is-invalid @enderror" >
                    @error('positif')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jumlah sembuh</label>
                    <input type="number" name="sembuh" class="form-control @error('sembuh') is-invalid @enderror " >
                    @error('sembuh')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Jumlah Meninggal</label>
                    <input type="number" name="meninggal" class="form-control  @error('meninggal') is-invalid @enderror" >
                    @error('meninggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control  @error('tanggal') is-invalid @enderror" >
                    @error('tanggal')
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
