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
    // 	// $baju = \App\Baju::all();
    // 	// return view('kelolabaju',['baju' => $baju]);
    // 	$baju = Baju::all();
    //     $trash = Baju::onlyTrashed()->get();
    //     return view('kelolabaju', compact('baju','trash'));
    // }

    public function store(Request $request)
    {
        $baju = new Baju;
        $baju->kode_baju = $request->get('kode_baju');
        $baju->nama_baju = $request->get('nama_baju');
        $baju->bahan = $request->get('bahan');
        $baju->ukuran = $request->get('ukuran');
        $baju->jenis_baju = $request->get('jenis_baju');
        $baju->harga = $request->get('harga');
        $baju->stok = $request->get('stok');

        $baju->save();

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
            'ukuran' => $request->get('ukuran'),
            'jenis_baju' => $request->get('jenis_baju'),
            'harga' => $request->get('harga'),
            'stok' => $request->get('stok'),            
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
    // public function emptyAll(){
    //     Baju::onlyTrashed()
    //         ->forceDelete();
    //     return redirect('kelolabaju')->with('empty_success', 'Semua Data berhasil dihapus');
    // }

    // public function restoreAll(){
    //     Baju::onlyTrashed()
    //         ->restore();
    //      return redirect('kelolabaju')->with('restore_all_success', 'Semua Data berhasil dikembalikan');
    // }
    
    // public function restore(Request $request){
    //     Baju::onlyTrashed()
    //         ->where('id_baju', $request->get('id_baju'))
    //         ->restore();
    //     return redirect('kelolabaju')->with('force_delete_success', 'Data berhasil dikembalikan');
    // }

    // public function forceDelete(Request $request){
    //     Baju::onlyTrashed()
    //     ->where('id_baju', $request->get('id_baju'))
    //     ->forceDelete();
    // return redirect('kelolabaju')->with('force_delete_success', 'Data berhasil dikembalikan');
    // }
}
