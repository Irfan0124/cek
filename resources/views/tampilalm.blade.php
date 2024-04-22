@extends('layout.main')
@section('title','student')
@section ('content')
<div class="card">
    <form action='/updatealm/{{$data->id}}' method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Kota </label>
          <input type="text" name="kota" value="{{$data->kota}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama"@required(true)>
        </div>
   
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection