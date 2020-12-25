<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use PDF;
use DB;
use App\Pegawai;
class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggajians = Penggajian::all();
        
        // $trash = Pegawai::onlyTrashed()->get();
        return view('penggajian', compact('penggajians'));
        
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
        
        $penggajian = Penggajian::getPenggajian($id);
        
        return response()->json($penggajian);
        
       
        
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

    public function getFilterPenggajian($bulan = null, $tahun = null){

        $arrange = $tahun.'-'.$bulan;
        $getPenggajian = DB::table('penggajian')->whereRaw('substr(created_at,1,7) = "'.$arrange.'"')->get();
        
        $i = 0;
        foreach($getPenggajian as $penggajian):

            $getPegawai = Pegawai::findOrFail($penggajian->id_pegawai);

            $bulanStr = '';

            if($bulan == '01'){ $bulanStr = 'Januari'; }
            else if($bulan == '02'){ $bulanStr = 'Februari'; }
            else if($bulan == '03'){ $bulanStr = 'Maret'; }
            else if($bulan == '04'){ $bulanStr = 'April'; }
            else if($bulan == '05'){ $bulanStr = 'Mei'; }
            else if($bulan == '06'){ $bulanStr = 'Juni'; }
            else if($bulan == '07'){ $bulanStr = 'Juli'; }
            else if($bulan == '08'){ $bulanStr = 'Agustus'; }
            else if($bulan == '09'){ $bulanStr = 'September'; }
            else if($bulan == '10'){ $bulanStr = 'Oktober'; }
            else if($bulan == '11'){ $bulanStr = 'November'; }
            else if($bulan == '12'){ $bulanStr = 'Desember'; }

            
            $i++;
            ?>

                <tr>
                    <td><?= $i ?></td>
                    <td><b><?= $bulanStr ?> <?= $tahun ?></b></td>
                    <td><?= @$getPegawai->id_pegawai ?></td>
                    <td><?= @$getPegawai->nama ?></td>
                    <td><?= @$getPegawai->jabatan ?></td>
                    <td><?= number_format($penggajian->gaji_pokok) ?></td>
                    <td><?= $penggajian->jml_hadir ?></td>
                    <td><?= number_format($penggajian->gaji_diterima) ?></td>
                    <td> 
                        <button type="submit" class="btn btn-primary" id="btn-edit-penggajian"
                data-toggle="modal" 
                data-target="#update"
                data-id="<?= $penggajian->id ?>"

                >Cetak Slip</button></td>
                    
                </tr>

            <?php

        endforeach;

    }

}
