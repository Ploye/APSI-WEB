<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanbeli extends Model
{
    // use SoftDeletes;
    protected $table = 'laporanbeli';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'kode_baju',
        'nama_baju',
        'bahan',
        'warnabaju',
        'ukuran',
        'jenis_baju',
        'harga',
        'qty',
        'bayar',
        'avatar',
        'nama_cs',
        'email_cs',
        'alamat_cs',
        'metodeByr',
        'created_at'
    ];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('/imgtoko/default.png');
        }

        return asset('imgtoko/'.$this->avatar);
    }

    public static function getLaporanbeli($id)
    {
        $laporanbeli = Laporanbeli::where('id',$id)->get();
        return $laporanbeli;
    }
}
