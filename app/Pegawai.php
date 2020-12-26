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
    static function getLastID(){
        $getLastData = DB::table('pegawai')->orderBy('id_pegawai','DESC')->first();
        if(empty($getLastData)){
            return 'P001';
        }else{
            
            if(empty($getLastData->id_pegawai)){
                return 'P001';
            }else{

                $temp = $getLastData->id_pegawai;
                $removeInitial = substr($temp,1);
                $increment = $removeInitial + 1;
                $arrange = 'P'.sprintf('%03d',$increment);

                return $arrange;
            }
            
        }
       


    }
}
