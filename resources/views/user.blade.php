@extends('layout.main')
@section('title','student')
@section ('content')
<h1>data pelanggan
</h1>
<a href="/tambahpln"class="btn btn-outline-secondary">tambah data</a><br>

<table class="table">
  <thead>
    <tr>
        <td>id</td>
        <td>nama </td>
        <td>alamat</td>
        <td>notelp </td>
        <td> </td>
    </tr>

</thead>
<tbody>
    @foreach($pln as $list)
   
    <td>{{$list->id}}</td>
    <td>{{$list->nama_pelanggan}}</td>
    <td>{{$list->alamat}}</td>
    <td>{{$list->nomor_telepon}}</td>
    
    <td>
        <a href="/tampilpln/{{$list->id}}" class="btn btn-primary">edit</button>
        <a href="/destroy/{{$list->id}}"  class="btn btn-danger">hapus</button></td>
</tbody>
@endforeach
  </table>
@endsection