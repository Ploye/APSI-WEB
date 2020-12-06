<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
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
        return $this->hasMany(Absensi::class);
    }
//Untuk Ajax
    public static function getPegawai($id_pegawai){

        $pegawai = Pegawai::where('id_pegawai',$id_pegawai)->get();
        return $pegawai;

    }
}
