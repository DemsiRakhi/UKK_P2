<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasyarakatModel extends Model
{
    protected $table="masyarakat";
    protected $primarykey="nik";
    public $timestamps=false;
    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
    ];

    public function pengaduan()
    {
        return $this->hasMany('App\PengaduanModel');
    }
}
