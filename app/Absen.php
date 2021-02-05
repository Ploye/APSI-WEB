<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Absen extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'id';
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
    public function getUpdatedAt()
    {
        return Carbon::parse($this->attributes['updated_at'])
            ->translatedFormat('l, d F Y');
    }
    //relasi
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai','id_pegawai');
    }
    //test git
    // public function penggajian()
    // {
    //     return $this->belongsTo(Penggajian::class,'id_pegawai','id_pegawai');
    // }
    public static function getAbsen($id){

        $absen = Absensi::where('id',$id)->get();
        return $absen;
        

    }
}
