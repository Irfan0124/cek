{{-- @extends('layout.main') --}}
{{-- @section('title','student')
@section ('content') --}}
<h1>data petugas
</h1>
<a href="/insertuser"class="btn btn-outline-secondary">tambah data</a><br>

<table class="table">
  <thead>
    <tr>
        <td>No</td>
        <td>id</td>
        <td>nama </td>
        <td>email</td>
        <td>password </td>
        {{-- <td>role</td> --}}
        <td> </td>
    </tr>

</thead>
<tbody>
    @foreach($user as $list)
    <td>{{$loop->iteration}}</td>
    <td>{{$list->id}}</td>
    <td>{{$list->name}}</td>
    <td>{{$list->email}}</td>
    <td>{{$list->password}}</td>
    {{-- <td>{{$list->role}}</td> --}}
    {{-- <td>
        <a href="/tampildata/{{$list->id}}" class="btn btn-primary">edit</button>
        <a href="/deleteuser/{{$list->id}}"  class="btn btn-danger">hapus</button></td> --}}
</tbody>
@endforeach
  {{-- </table>
@endsection --}}