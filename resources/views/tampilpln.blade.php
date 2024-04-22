@extends('layout.main')
@section('title','student')
@section ('content')
<div class="card">
    <form action='/updatepln/{{$data->id}}' method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama </label>
          <input type="text" name="nama_pelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
          value="{{$data->nama_pelanggan}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat </label>
          <select class="form-select" name="alamat" value="{{$data->alamat}}">
            <option selected>Open this select menu</option>
            <option value="">pilih alamat</option>
            @foreach ($alamatList as $alamat) <option value="{{ $alamat->id }}">{{ $alamat->kota }}</option> @endforeach 
          </select>
        </div>  
        
        <div class="form-group">
            <label for="exampleInputEmail1">notelp</label>
            <input type="text" name="nomor_telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
            value="{{$data->nomor_telepon}}">
          </div>
          
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection