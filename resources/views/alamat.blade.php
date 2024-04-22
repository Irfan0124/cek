@extends('layout.main')
@section('title','student')
@section ('content')
<h1>tes
</h1>
<a href="/tambahalm"class="btn btn-outline-secondary">tambah data</a><br>

<table class="table">
  <thead>
    <tr>
        <td>id</td>
        <td>kota </td>
        <td> </td>
    </tr>

</thead>
<tbody>
    @foreach($alm as $list)
   
    <td>{{$list->id}}</td>
    <td>{{$list->kota}}</td>
  
    
    <td>
        <a href="/tampilalm/{{$list->id}}" class="btn btn-primary">edit</button>
        <a href="/destroy/{{$list->id}}"  class="btn btn-danger">hapus</button></td>
</tbody>
@endforeach
  </table>
@endsection