<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'id_absen';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = [
        'id_absen',
        'nama',
        'jabatan',
        'tanggal',
        'status',
        'alamat',
        'email'

    ];
    //relasi
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai','id_pegawai');
    }
    public static function getAbsen($id_absen){

        $absen = Absen::where('id_absen',$id_absen)->get();
        return $absen;

    }
}
