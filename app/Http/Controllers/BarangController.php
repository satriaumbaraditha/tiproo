<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Merk;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs= Barang::all();
        return view('ViewBarang', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merks = Merk::all();
        return view('TambahBarang', compact('merks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'kode' => 'required|unique:barangs',
            'namabarang' => 'required',
            'merk' => 'required',
        ]);
            $barangs = new Barang();
            $barangs->kode = $request->kode;
            $barangs->nama_barang = $request->namabarang;
            $barangs->merk_id = $request->merk;
            $barangs->harga = $request->harga;
            $barangs->stok = $request->stok;
            $barangs->save();
            return redirect(route('Barang.index'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::find($id);
        $merks = Merk::all();
        return view('UbahBarang', compact('barangs','merks'));
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
        $this->validate($request,[
            'kode' => 'required',
            'namabarang' => 'required',
            'merk' => 'required',
        ]);
        $barangs = Barang::find($id);
        $barangs->kode = $request->kode;
        $barangs->nama_barang = $request->namabarang;
        $barangs->merk_id = $request->merk;
        $barangs->harga = $request->harga;
        $barangs->stok = $request->stok;
        $barangs->save();
        return redirect(route('Barang.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = Barang::find($id);
        $barangs->delete();
        return redirect(route('Barang.index'));
    }
}
