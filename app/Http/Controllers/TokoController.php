<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Baju;
use App\Keranjang;
use App\Laporanbeli;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('sablon.toko');
    
    }

    public function pesanbaju($id)
    {
        $cs = \App\User::find($id);
        $baju = \App\Baju::all();
        $laporanbeli = \App\Laporanbeli::all();
        // $trash = Baju::onlyTrashed()->get();
        return view('sablon.pesanbaju',['baju' => $baju], ['cs' => $cs], ['laporanbeli' => $laporanbeli]);
    }

    public function beli($id, $id_baju) //jg ka halaman beli tapi boostrap na t kapanggil
    {
        $baju = Baju::all();
        $cs = \App\User::find($id);
        $baju = Baju::find($id_baju);
        $laporanbeli = \App\Laporanbeli::all();
        // $trash = Baju::onlyTrashed()->get();
        return view('sablon.beli',['baju' => $baju], ['cs' => $cs], ['laporanbeli' => $laporanbeli]);

    }    

    // public function back($id)
    // {
    //     $cs = User::find($id);
    //     // $trash = Baju::onlyTrashed()->get();
    //     return view('back');
    // }

    // public function create(Request $request)
    // {
    //     // dd($request->all());
    //     //$laporanbeli = \App\Laporanbeli::find($id);
    //     //$laporanbeli->cekout($request->all());
    //     $laporanbeli = \App\Laporanbeli::create($request->all());
    //         $laporanbeli->save();
        
    //      return redirect('sablon.toko');
    // }

    public function toko($id)
    {
        $cs = \App\User::find($id);
        $baju = \App\Baju::all();
        $laporanbeli = \App\Laporanbeli::all();
        // $trash = Baju::onlyTrashed()->get();
        return view('sablon.toko',['baju' => $baju], ['cs' => $cs], ['laporanbeli' => $laporanbeli]);

    }    
    public function tokov()
    {
        // $cs = \App\User::find($id);
        $baju = \App\Baju::all();
        // $laporanbeli = \App\Laporanbeli::all();
        // $trash = Baju::onlyTrashed()->get();
        return view('sablon.toko',['baju' => $baju]);

    }    

    //keranjang
    // public function keranjang($id)
    // {
    //     $cs = \App\User::find($id);
    //     $keranjang = \App\Keranjang::all();
    //     // $trash = Baju::onlyTrashed()->get();
    //     return view('sablon.keranjang',['keranjang' => $keranjang], ['cs' => $cs]);

    // }  

    // public function store(Request $request)
    // {
    //     $baju = \App\Baju::all();
    //     $laporanbeli = new Laporanbeli;
    //     $laporanbeli->kode_baju = $request->get('kode_baju');
    //     $laporanbeli->nama_baju = $request->get('nama_baju');
    //     $laporanbeli->bahan = $request->get('bahan');
    //     $laporanbeli->warnabaju = $request->get('warnabaju');
    //     $laporanbeli->ukuran = $request->get('ukuran');
    //     $laporanbeli->jenis_baju = $request->get('jenis_baju');
    //     $laporanbeli->harga = $request->get('harga');
    //     $laporanbeli->qty = $request->get('qty');
    //     $laporanbeli->bayar = $request->get('bayar');
    //     if($request->hasFile('avatar')){
    //         $request->file('avatar')->move('imgtoko/',$request->file('avatar')->getClientOriginalName());
    //         $baju->avatar = $request->file('avatar')->getClientOriginalName();
    //         $baju->save();
    //     }
    //     $laporanbeli->nama_cs = $request->get('nama_cs');
    //     $laporanbeli->email_cs = $request->get('email_cs');
    //     $laporanbeli->alamat_cs = $request->get('alamat_cs');
    //     $laporanbeli->noWa = $request->get('noWa');
    //     $laporanbeli->metodeByr = $request->get('metodeByr');

    //     $laporanbeli->save();
    // }

    //checkout
    // public function cekout(Request $request)
    // {
    //     $baju = App\Baju::all();
    //     $laporanbeli = new Laporanbeli;
    //     $laporanbeli->kode_baju = $request->get('kode_baju');
    //     $laporanbeli->nama_baju = $request->get('nama_baju');
    //     $laporanbeli->bahan = $request->get('bahan');
    //     $laporanbeli->warnabaju = $request->get('warnabaju');
    //     $laporanbeli->ukuran = $request->get('ukuran');
    //     $laporanbeli->jenis_baju = $request->get('jenis_baju');
    //     $laporanbeli->harga = $request->get('harga');
    //     $laporanbeli->qty = $request->get('qty');
    //     $laporanbeli->bayar = $request->get('bayar');
    //     $laporanbeli->avatar = $request->get('avatar');
    //     $laporanbeli->nama_cs = $request->get('nama_cs');
    //     $laporanbeli->email_cs = $request->get('email_cs');
    //     $laporanbeli->alamat_cs = $request->get('alamat_cs');
    //     $laporanbeli->noWa = $request->get('noWa');
    //     $laporanbeli->metodeByr = $request->get('metodeByr');

    //     $laporanbeli->save();

    //     // return redirect('sablon.toko')->with('beli_success', 'Berhasil beli');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

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
