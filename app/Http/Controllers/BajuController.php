<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baju;

class BajuController extends Controller
{
    public function index()
    {
        $baju = Baju::all();
        // $trash = Baju::onlyTrashed()->get();
        return view('kelolabaju', compact('baju'));

    }
    

    // public function kelolabaju()
    // {
    //  // $baju = \App\Baju::all();
    //  // return view('kelolabaju',['baju' => $baju]);
    //  $baju = Baju::all();
    //     $trash = Baju::onlyTrashed()->get();
    //     return view('kelolabaju', compact('baju','trash'));
    // }

    public function store(Request $request)
    {
        $baju = new Baju;
        $baju->kode_baju = $request->get('kode_baju');
        $baju->nama_baju = $request->get('nama_baju');
        $baju->bahan = $request->get('bahan');
        $baju->warnabaju = $request->get('warnabaju');
        $baju->ukuran = $request->get('ukuran');
        $baju->jenis_baju = $request->get('jenis_baju');
        $baju->harga = $request->get('harga');
        $baju->stok = $request->get('stok');
        // $baju->avatar = $request->get('avatar');
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('imgtoko/',$request->file('avatar')->getClientOriginalName());
            $baju->avatar = $request->file('avatar')->getClientOriginalName();
            $baju->save();
        }

        $baju->save();

        // $baju = \App\Baju::create($request->all());
        // if($request->hasFile('avatar')){
        //     $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
        //     $baju->avatar = $request->file('avatar')->getClientOriginalName();
        //     $baju->save();
        // }

        return redirect('kelolabaju')->with('added_success', 'Data Berhasil ditambahkan');
    }

    // public function destroy(Request $request,$id)
    // {
    //     $baju = Baju::where('id_baju', $request->get('id_baju'))
    //     ->delete();

    //     return redirect('kelolabaju')->with('deleted_success', 'Data berhasil dihapus');
    // }

    //

    public function show($id)
    {
        $baju = Baju::getBaju($id);

        return response()->json($baju);
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

        $baju = Baju::where('id_baju', $request->get('id_baju'))
        ->update([
            'kode_baju' => $request->get('kode_baju'),
            'nama_baju' => $request->get('nama_baju'),
            'bahan' => $request->get('bahan'),
            'warnabaju' => $request->get('warnabaju'),
            'ukuran' => $request->get('ukuran'),
            'jenis_baju' => $request->get('jenis_baju'),
            'harga' => $request->get('harga'),
            'stok' => $request->get('stok'),           
            'avatar' => $request->get('avatar'),
        ]);

        return redirect('kelolabaju')->with('updated_success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $baju = Baju::where('id_baju', $request->get('id_baju'))
        ->delete();

        return redirect('kelolabaju')->with('deleted_success', 'Data berhasil dihapus');
    }
}
