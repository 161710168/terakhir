<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
	protected $table = 'absensis';
    protected $fillable = ['tgl_absen','kelas','id_siswa','id_keterangan'];
    public $timestamps = true;

    public function Siswa(){
        return $this->belongsTo('App\Siswa','id_siswa');
    }  

    public function Keterangan(){
        return $this->belongsTo('App\Keterangan','id_keterangan');
    }  
}
