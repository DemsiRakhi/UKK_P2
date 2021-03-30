<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table="petugas";
    protected $primarykey="id_petugas";
    public $timestamps=false;
    protected $fillable = [
        'id_petugas',
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level',
    ];
}
