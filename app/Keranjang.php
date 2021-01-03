<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
	// use SoftDeletes;
    protected $table = 'keranjang';

    protected $fillable = [
        'id',
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

    public static function getKeranjang($id)
    {
        $keranjang = Keranjang::where('id',$id)->get();
        return $keranjang;
    }
}
