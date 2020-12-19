<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Absen;
use App\Penggajian;
use Illuminate\Support\Carbon;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        // $lastID = pegawai::getLastID();
        // return view('pegawai.DataPendonor',["user"=>$user],[
        //     "datadonor" =>$datadonor, 
        //     "lastID" => $lastID
        //     ]);
        // $trash = Pegawai::onlyTrashed()->get();
        return view('pegawai', compact('pegawais'));
        
    }
    // public function cari(Request $request)
	// {
    //     $nama = $request->nama;
    //     $pegawais = Pegawai::where('nama','like',"%".$nama."%")->paginate(2);
    //     return view('pegawai',compact('pegawais'));
 
    // }
    public function search(Request $request)
{
if($request->ajax())
{
$output="";
$pegawais=Pegawai::where('nama','LIKE','%'.$request->search."%")->get();
if($pegawais)
{
    $no=1;
foreach ($pegawais as $key => $pegawai) {
$output.='<tr>'.
'<td>'.$no++.'</td>'.
'<td>'.$pegawai->id_pegawai.'</td>'.
'<td>'.$pegawai->nama.'</td>'.
'<td>'.$pegawai->jenis_kelamin.'</td>'.
'<td>'.$pegawai->no_hp.'</td>'.
'<td>'.$pegawai->jabatan.'</td>'.
'<td>'.$pegawai->alamat.'</td>'.
'<td>'.$pegawai->email.'</td>'.
'<td>
<div>
<button type="button" class="btn btn-danger" id="btn-delete-pegawai"

data-toggle="modal" 
data-target="#delete"
data-id_pegawai='.$pegawai->id_pegawai.'>Hapus</button>
</div></td>'.
'</tr>';
}

return Response($output);
   }
   }
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
        
        $pegawai = new Pegawai;
        $penggajian = new Penggajian;
        $pegawai->id_pegawai = $request->get('id_pegawai');
        $pegawai->nama = $request->get('nama');
        $pegawai->jenis_kelamin = $request->get('jenis_kelamin');
        $pegawai->no_hp = $request->get('no_hp');
        $pegawai->jabatan = $request->get('jabatan');
        $pegawai->alamat = $request->get('alamat');
        $pegawai->email = $request->get('email');
        $penggajian->nama = $request->get('nama');
        $penggajian->jabatan = $request->get('jabatan');
        $pegawai->save();
        
       
        $absen = new Absen;
        $absen->id_pegawai = $request->get('id_pegawai');
        $absen->status = '0';
        $absen->save();

        $gaji='40000';
        
        
        $absen ='30';
        $tidak_absen ='5';
        $total_absen =  $absen - $tidak_absen;
        $gaji_di_termia = $gaji * $total_absen;
        $penggajian->id_pegawai = $request->get('id_pegawai');
        $penggajian->gaji_pokok = $gaji;
        $penggajian->jml_tidak_hadir = $tidak_absen;
        $penggajian->gaji_diterima = $gaji_di_termia;
        $penggajian->absen_id= null;
        
        $penggajian->save();

        return redirect('pegawai')->with('added_success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::getPegawai($id);

        return response()->json($pegawai);
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
        $pegawai = Pegawai::where('id_pegawai', $request->get('id_pegawai'))
        ->update([
            'nama' => $request->get('nama'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'no_hp' => $request->get('no_hp'),
            'jabatan' => $request->get('jabatan'),
            'alamat' => $request->get('alamat'),
            'email' => $request->get('email'),

        ]);

        return redirect('pegawai')->with('updated_success', 'Data Berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $penggajian = Penggajian::where('id_pegawai', $request->get('id_pegawai'))
        ->delete();
        $absen = Absen::where('id_pegawai', $request->get('id_pegawai'))
        ->delete();
        $pegawai = Pegawai::where('id_pegawai', $request->get('id_pegawai'))
        ->delete();

        

        return redirect('pegawai')->with('deleted_success', 'Data berhasil dihapus');
    }
}
 
