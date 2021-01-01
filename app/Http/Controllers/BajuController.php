<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baju;
use DB;
use PDF;
class BajuController extends Controller
{
    public function index()
	{
		$baju = Baju::all();
        $lastID = Baju::getLastID();
        return view('kelolabaju',["lastID"=>$lastID], compact('baju'));
	}

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

    public function show($id)
    {
        $baju = Baju::getBaju($id);

        return response()->json($baju);
    }
    public function generatePDF()

    {
        // $data = ['title' => 'Welcome to belajarphp.net'];
        $baju= Baju::all();
        $pdf = PDF::loadView('laporanbaju',compact('baju'));
        return $pdf->download('laporan-baju-pdf.pdf');
        // return view('laporanpegawai', compact('pegawais'));

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
   
}
