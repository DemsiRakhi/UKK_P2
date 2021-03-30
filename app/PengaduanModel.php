<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengaduanModel extends Model
{
    protected $table="pengaduan";
    protected $primarykey="id_pengaduan";
    public $timestamps=false;
    protected $fillable = [
        'id_pengaduan',
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'foto',
        'status',
    ];

    public function tanggapan()
    {
        return $this->hasMany('App\TanggapanModel');
    }

    public function masyarakat()
    {
        return $this->belongsTo('App\MasyarakatModel', 'nik');
    }
}
