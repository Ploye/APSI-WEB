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

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai','id_pegawai');
    }
}
