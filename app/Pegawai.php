<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pegawai extends Model
{
    use SoftDeletes;
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
    // //One to one
    // public function mahasiswa(){
    //     return $this->hasOne('App\Mahasiswa','nidn');
    // }
    // //One to Many
    // public function allmhs(){
    //     return $this->hasMany('App\Mahasiswa','nidn');
    // }
    // //Many to Many
    // public function matkul(){
    //     return $this->belongsToMany('App\Matakuliah','jadwal','nidn','kode_matakuliah');
    // }
    // //Has one Through
    // public function oneKrs(){
    //     return $this->hasOneThrough(
    //         'App\Krs',
    //         'App\Mahasiswa',
    //         'nidn',
    //         'npm',
    //         'nidn',
    //         'npm'
    //     );
    // }
    //  //Has Many Through
    //  public function ManyKrs(){
    //     return $this->hasManyThrough(
    //         'App\Krs',
    //         'App\Mahasiswa',
    //         'nidn',
    //         'npm',
    //         'nidn',
    //         'npm'
    //     );

    // }
//Untuk Ajax
    public static function getPegawai($id_pegawai){

        $pegawai = Pegawai::where('id_pegawai',$id_pegawai)->get();
        return $pegawai;

    }
}
