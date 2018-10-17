<?php

namespace App\Http\Controllers;

use App\ModelBarang;
use App\ModelBarang ;
use Illuminate\Http\Request;

class Barang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelBarang::all();
        return view('barang',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('show_barang', ['barang' => ModelBarang::findOrFail($id)],compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = ModelBarang::where('id',$id)->get();

        return view('barang_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = ModelBarang::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->unit = $request->unit;
        $data->harga = $request->harga;
        $data->foto = $request->foto;
        $data->statusPecahBelah = $request->statusPecahBelah;
        $data->save();
        return redirect()->route('barang.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelBarang::where('id',$id)->first();
        $data->delete();
        return redirect()->route('barang.index')->with('alert-success','Data berhasi dihapus!');
    }
}
