<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanggapanModel extends Model
{
    protected $table="tanggapan";
    protected $primarykey="id_tanggapan";
    public $timestamps=false;
    protected $fillable = [
        'id_tanggapan',
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'id_petugas',
    ];
    
    public function pengaduan()
    {
        return $this->belongsTo('App\PengaduanModel', 'id_pengaduan');
    }
}

