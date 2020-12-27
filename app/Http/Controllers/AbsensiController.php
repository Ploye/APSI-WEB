<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Illuminate\Support\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use DB;
use App\Penggajian;
use App\Pegawai;
use PDF;

class AbsensiController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        // DI dieu jieun fungsi jang insert k absensi okeoke


        $getDataPegawai = Pegawai::all();
        foreach($getDataPegawai as $peg):

            $check = Absen::whereDate('created_at', Carbon::today())->where('id_pegawai', $peg->id_pegawai)->first();

            if(!empty($check)){}else{

                $absen = new Absen;
                $absen->id_pegawai = $peg->id_pegawai;
                $absen->status = '0';
                $absen->save();

            }

        endforeach;


        $absens = Absen::all();
        $absens = Absen::whereDate('created_at', Carbon::today())->get();
        // Absen::where('status', '=', 1)->update(array('status' => 0));
        // Absen::where('status', '>', Carbon::now())->delete();
        
        
        // Absen::where('status', '=', 1)->update(array('status' => 0));
        return view('absen', compact('absens'));
        
        
    }
    public function generatePDF()

    {
           
        $absens= Absen::orderby('id_pegawai','ASC')->get();
        $pdf = PDF::loadView('laporanabsen',compact('absens'));
        return $pdf->download('laporan-absen-pdf.pdf');
        // return view('laporanabsen', compact('absens'));

    }

    public function changeStatus(Request $request)
    {
        $absen = Absen::find($request->id);
        $absen->status = $request->status;
        $absen->save();

        $idpegawai = $absen->id_pegawai;

        $checkAbsensi = DB::table('absen')
                            ->selectRaw('(SELECT count(status) FROM absen WHERE status = 1 AND id_pegawai = "'.$idpegawai.'") as `jml_hadir`, (SELECT count(status) FROM absen WHERE status = 0 AND id_pegawai = "'.$idpegawai.'") as `jml_tidak_hadir`')
                            ->where('id_pegawai',$idpegawai)
                            ->first();

        $checkPenggajian = DB::table('penggajian')
                        ->where('id_pegawai',$idpegawai)
                        ->first();
        
        $gaji='40000';
        $absen = (!empty($checkAbsensi) ? $checkAbsensi->jml_hadir : 0);
        // $tidak_absen = (!empty($checkAbsensi) ? $checkAbsensi->jml_tidak_hadir : 0);

        

        $total_absen =  $absen;
        $gaji_di_termia = ($absen > 0 ? $gaji * $total_absen : 0);

        

        if(empty($checkPenggajian)){

            $getPegawai = Pegawai::findOrFail($idpegawai);

            $penggajian = new Penggajian;
            $penggajian->nama = $getPegawai->nama;
            $penggajian->jabatan = $getPegawai->jabatan;
            $penggajian->id_pegawai = $idpegawai;
            $penggajian->gaji_pokok = $gaji;
            $penggajian->jml_hadir = $absen;
            $penggajian->gaji_diterima = $gaji_di_termia;
            $penggajian->absen_id= null;
            
            $penggajian->save();

        }else{

            $getPegawai = Pegawai::findOrFail($idpegawai);

            $penggajian = Penggajian::findOrFail($checkPenggajian->id);
            $penggajian->nama = $getPegawai->nama;
            $penggajian->jabatan = $getPegawai->jabatan;
            $penggajian->id_pegawai = $idpegawai;
            $penggajian->gaji_pokok = $gaji;
            $penggajian->jml_hadir = $absen;
            $penggajian->gaji_diterima = $gaji_di_termia;
            $penggajian->absen_id= null;
            
            $penggajian->update();

        }
        

        return response()->json(['success'=>'Status change successfully.']);
        
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
        // Absen::where('status', '<', Carbon::now()->subHours(24))->delete();
        
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
       
        $absen = Absen::where('id', $request->get('id'))
        ->update([
            'status' => $request->get('status'),
            

        ]);
        
        return redirect('absen')->with('updated_success', 'Data Berhasil diupdate');
    }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    

