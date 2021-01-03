<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Baju extends Model
{
    // use SoftDeletes;
    protected $table = 'baju';    
    protected $primaryKey = 'id_baju';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = [
        'id_baju',
        'kode_baju',
        'nama_baju',
        'bahan',
        'ukuran',
        'jenis_baju',
        'harga',
        'stok'
    ];


    public static function getBaju($id_baju)
    {
        $baju = Baju::where('id_baju',$id_baju)->get();
        return $baju;
    }
    static function getLastID(){
        $getLastData = DB::table('baju')->orderBy('kode_baju','DESC')->first();
        if(empty($getLastData)){
            return 'B001';
        }else{
            
            if(empty($getLastData->kode_baju)){
                return 'B001';
            }else{

                $temp = $getLastData->kode_baju;
                $removeInitial = substr($temp,1);
                $increment = $removeInitial + 1;
                $arrange = 'B'.sprintf('%03d',$increment);

                return $arrange;
            }
            
        }
       


    }
}
