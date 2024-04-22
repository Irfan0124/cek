<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table['alm']=Alamat::all();
        return view('alamat',$table);//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahalm()
    {
        return view('tambahalm');    //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertalm(Request $request)
    {
        Alamat::create($request->all());
        return redirect()->route('alamat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Alamat::find($id);
   
        return view('tampilalm',compact ('data')); //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Alamat::find($id);
        $data->update($request->all());
        return redirect()->route('alamat'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Alamat::find($id);
        $data->delete();
        return redirect()->route('alamat'); //
    }
}
