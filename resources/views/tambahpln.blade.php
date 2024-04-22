@extends('layout.main')
@section('title','student')
@section ('content')
<div class="card">
    <form action='/insertpln' method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama </label>
          <input type="text" name="nama_pelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama"@required(true)>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">alamat</label>
          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat"@required(true)>
        </div>  
        
        <div class="form-group">
            <label for="exampleInputEmail1">nomor_telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Telepon"@required(true)>
          </div>
          
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection