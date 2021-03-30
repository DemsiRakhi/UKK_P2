<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengaduanModel;
use App\TanggapanModel;

class PageController extends Controller
{
    public function index(){
        $pengaduan1 = PengaduanModel::count();
        $tanggapan1 = TanggapanModel::count();
        return view('/dashboard', compact('pengaduan1','tanggapan1'));
    }

}
