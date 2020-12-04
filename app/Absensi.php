<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'id_absen';
    public $incrementing = false;
    protected $keyType = 'char';
}
