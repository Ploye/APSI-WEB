<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Pegawai extends Model
{
    // use SoftDeletes;
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    public $incrementing = false;
    protected $keyType = 'char';
    // protected $attributes = [
    //     'status' => 1
    // ];
    

    protected $fillable = [
        'id_pegawai',
        'nama',
        'jenis_kelamin',
        'no_hp',
        'jabatan',
        'alamat',
        'email'

    ];

    static function getPegawaiid()
   {
    $getLastData = DB::table('RIGHT(pegawai.id_pegawai,2) as kode', FALSE)->orderBy('id_pegawai','DESC')->limit(1);
    
    if(empty($getLastData)){
        return 'P001';
    }else{
        
        if(empty($getLastData->reg_id)){
            return 'P001';
        }else{

            $temp = $getLastData->reg_id;
            $removeInitial = substr($temp,1);
            $increment = $removeInitial + 1;
            $arrange = 'P'.sprintf('%03d',$increment);

            return $arrange;
        }
    }
}
    public function absensi()
    {
        return $this->hasOne(Absensi::class);
    }


    public function penggajian()
    {
        return $this->hasOne(Penggajian::class);
    }
//Untuk Ajax
    public static function getPegawai($id_pegawai){

        $pegawai = Pegawai::where('id_pegawai',$id_pegawai)->get();
        return $pegawai;

    }
}
