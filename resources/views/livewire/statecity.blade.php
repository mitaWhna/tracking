<div>
  <div class="form-group row">
     <label for="state" class="col-md-4 col-form-label text-md-right">Provinsi</label>

     <div class="col-md-6">
          <select wire:model="selectedState" class="form-control">
               <option value="" selected>-- Pilih Provinsi --</option>
               @foreach($provinsi as $data)
                   <option value="{{ $data->id }}">{{ $data->nama_provinsi }}</option>
               @endforeach
          </select>
      </div>
 </div>

 @if (!is_null($selectedState))
     <div class="form-group row">
     <label for="city" class="col-md-4 col-form-label text-md-right">Kota</label>

     <div class="col-md-6">
         <select class="form-control" wire:model="selectedState2" name="city_id">
            <option value="" selected>-- Pilih kota --</option>
            @foreach($kota as $data2)
                <option value="{{ $data2->id }}">{{ $data2->nama_kota }}</option>
            @endforeach
        </select>
    </div>
    </div>
    @endif

    @if (!is_null($selectedState2))
     <div class="form-group row">
     <label for="city" class="col-md-4 col-form-label text-md-right">Kecamatan</label>

     <div class="col-md-6">
         <select class="form-control" wire:model="selectedState3" name="city_id">
            <option value="" selected>-- Pilih Kecamatan --</option>
            @foreach($kecamatan as $data3)
                <option value="{{ $data3->id }}">{{ $data3->nama_kecamatan }}</option>
            @endforeach
        </select>
    </div>
    </div>
    @endif

    @if (!is_null($selectedState3))
     <div class="form-group row">
     <label for="city" class="col-md-4 col-form-label text-md-right">Kelurahan</label>

     <div class="col-md-6">
         <select class="form-control" wire:model="selectedState4" name="city_id">
            <option value="" selected>-- Pilih Kelurahan --</option>
            @foreach($kelurahan as $data4)
                <option value="{{ $data4->id }}">{{ $data4->nama_kelurahan }}</option>
            @endforeach
        </select>
    </div>
    </div>
    @endif

    @if (!is_null($selectedState4))
     <div class="form-group row">
     <label for="city" class="col-md-4 col-form-label text-md-right">Rw</label>

     <div class="col-md-6">
         <select class="form-control" wire:model="selectedState5" name="id_rw">
            <option value="" selected>-- Pilih Rw --</option>
            @foreach($rw as $data5)
                <option value="{{ $data5->id }}">{{ $data5->nama_rw }}</option>
            @endforeach
        </select>
    </div>
    </div>
    @endif
    </div>
