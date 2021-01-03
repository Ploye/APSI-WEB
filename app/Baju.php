<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

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
        'warnabaju',
        'ukuran',
        'jenis_baju',
        'harga',
        'stok',
        'avatar'
    ];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('/imgtoko/default.png');
        }

        return asset('imgtoko/'.$this->avatar);
    }
    
    public static function getBaju($id_baju)
    {
        $baju = Baju::where('id_baju',$id_baju)->get();
        return $baju;
    }
}
