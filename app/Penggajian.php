<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
      // use SoftDeletes;
      protected $table = 'penggajian';
      protected $primaryKey = 'id';
      public $incrementing = false;
      protected $keyType = 'char';
      // protected $attributes = [
      //     'status' => 1
      // ];
      
  
      protected $fillable = [
          'id_penggajian',
          'nama',
          'jenis_kelamin',
          'no_hp',
          'jabatan',
          'alamat',
          'email'
  
      ];

    //   public function absensi()
    // {
    //     return $this->hasOne(Absensi::class);
    // }
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai','id_pegawai');
    }
    //Untuk Ajax
    public static function getPenggajian($id){

        $penggajian = Penggajian::where('id',$id)->get();
        return $penggajian;
      
    }
}
