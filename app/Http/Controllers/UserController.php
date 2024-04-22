<?php

namespace App\Http\Controllers;

use App\Models\Tes;
use App\Models\User;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    $table['pln']=Pelanggan::all();
    return view('user',$table);
}

public function tambahpln(){
    $alamatList = DB::table('alamat')
    ->select('id', 'kota')
    ->get();
    return view('tambahpln',compact('alamatList'));
} 
public function insertpln(Request $request){
    Pelanggan::create($request->all());
    return redirect()->route('pelanggan');
}
public function show($id)
{
    $data=Pelanggan::find($id);
    $alamatList = DB::table('alamat')
    ->select('id', 'kota')
    ->get();
    return view('tampilpln',compact ('data','alamatList'));// Menampilkan detail data pelanggan
}

public function edit($id)
{
    // Menampilkan form untuk mengedit data pelanggan
}

public function update(Request $request, $id)
{
    $data=Pelanggan::find($id);
    $data->update($request->all());
    return redirect()->route('pelanggan');// Mengupdate data pelanggan yang telah ada
}

public function destroy($id)
{
    $data=Pelanggan::find($id);
    $data->delete();
    return redirect()->route('pelanggan'); // Menghapus data pelanggan
}//
}