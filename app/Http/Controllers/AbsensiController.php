<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;
class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absens = Absen::all();
        // $trash = Pegawai::onlyTrashed()->get();
        return view('absen', compact('absens'));
        
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
    // public function store(Request $request)
    // {
    //     $absen = new Absen;
    //     $absen->id_pegawai = $request->get('id_pegawai');
    //     $absen->nama = $request->get('nama');
    //     $absen->jenis_kelamin = $request->get('jenis_kelamin');
    //     $absen->no_hp = $request->get('no_hp');
    //     $absen->jabatan = $request->get('jabatan');
    //     $absen->alamat = $request->get('alamat');
    //     $absen->email = $request->get('email');

    //     $absen->save();

    //     return redirect('absen')->with('added_success', 'Data Berhasil ditambahkan');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absen::getAbsen($id);

        return response()->json($absen);
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
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $absen = Absen::where('id_absen', $request->get('id_absen'))
    //     ->update([
    //         'nama' => $request->get('nama'),
    //         'jenis_kelamin' => $request->get('jenis_kelamin'),
    //         'no_hp' => $request->get('no_hp'),
    //         'jabatan' => $request->get('jabatan'),
    //         'alamat' => $request->get('alamat'),
    //         'email' => $request->get('email'),

    //     ]);

    //     return redirect('absen')->with('updated_success', 'Data Berhasil diupdate');
    // }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    

    // public function emptyAll(){
    //     Pegawai::onlyTrashed()
    //         ->forceDelete();
    //     return redirect('pegawai')->with('empty_success', 'Semua Data berhasil dihapus');
    // }

    // public function restoreAll(){
    //     Pegawai::onlyTrashed()
    //         ->restore();
    //      return redirect('pegawai')->with('restore_all_success', 'Semua Data berhasil dikembalikan');
    // }
    
//     public function restore(Request $request){
//         Pegawai::onlyTrashed()
//             ->where('id_pegawai', $request->get('id_pegawai'))
//             ->restore();
//         return redirect('pegawai')->with('force_delete_success', 'Data berhasil dikembalikan');
//     }

//     public function forceDelete(Request $request){
//         Pegawai::onlyTrashed()
//         ->where('id_pegawai', $request->get('id_pegawai'))
//         ->forceDelete();
//     return redirect('pegawai')->with('force_delete_success', 'Data berhasil dikembalikan');
//     }
// } 
