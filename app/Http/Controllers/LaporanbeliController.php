<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Baju;
use App\Keranjang;
use App\Laporanbeli;
class LaporanbeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanbeli = Laporanbeli::all();
        // $trash = Baju::onlyTrashed()->get();
        return view('laporanpenjualan', compact('laporanbeli'));

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
        $cs = \App\User::all();
        $baju = \App\Baju::all();
        $laporanbeli = new Laporanbeli;
        $laporanbeli->kode_baju = $request->get('kode_baju');
        $laporanbeli->nama_baju = $request->get('nama_baju');
        $laporanbeli->bahan = $request->get('bahan');
        $laporanbeli->warnabaju = $request->get('warnabaju');
        $laporanbeli->ukuran = $request->get('ukuran');
        $laporanbeli->jenis_baju = $request->get('jenis_baju');
        $laporanbeli->harga = $request->get('harga');
        $laporanbeli->qty = $request->get('qty');
        $laporanbeli->bayar = $request->get('bayar');
        $laporanbeli->avatar = $request->get('avatar');
        $laporanbeli->nama_cs = $request->get('nama_cs');
        $laporanbeli->email_cs = $request->get('email_cs');
        $laporanbeli->alamat_cs = $request->get('alamat_cs');
        $laporanbeli->metodeByr = $request->get('metodeByr');
        
        $laporanbeli->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporanbeli = Laporanbeli::getLaporanbeli($id);

        return response()->json($laporanbeli);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
