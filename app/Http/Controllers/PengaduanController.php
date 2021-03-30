<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengaduanModel;
use App\MasyarakatModel;
use App\TanggapanModel;
use Validator;
use Session;
use PDF;

class PengaduanController extends Controller
{
    public function index()
    {
        Session::get('nik');
        $data_tanggapan['data_tanggapan']=TanggapanModel::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')
        ->join('masyarakat','masyarakat.nik','pengaduan.nik')->get(); 
        return view("pengaduan.pengaduan",$data_tanggapan);
    }

    public function create()
    {
        return view('user.create_pengaduan');
    }

    public function store(Request $req)
    {
        $this->validate($req,[
            'tgl_pengaduan'     => 'required',
            'isi_laporan'       => 'required',
            'foto'              => 'required',

        ]);
        $gambar = $req->file('foto');
        $tujuan_upload = 'images';

        if(Session()->has('nik')){
        $post = PengaduanModel::create([
            'nik'               => Session()->get('nik'),
            'tgl_pengaduan'     => $req->tgl_pengaduan,
            'isi_laporan'       => $req->isi_laporan,
            'foto'              => $gambar->getClientOriginalName(),
        ]);  
    }    

        $gambar->move($tujuan_upload ,$gambar->getClientOriginalName());
        return redirect()->back()->with('alert_message', 'Berhasil Melakukan Pengaduan');

    }

    public function edit($id)
    {
        $data = PengaduanModel::where('id_pengaduan', $id)->first();
        return view('pengaduan.edit_pengaduan',compact('data'));
    }
    
    public function detail($id)
    {
        $data = PengaduanModel::where('id_pengaduan', $id)->first();
        
        return view('pengaduan.detail_pengaduan', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $data = PengaduanModel::where('id_pengaduan', $req->id)->update([
            'status'            => $req->status,
        ]);
        if($data){
            return redirect()->action('PengaduanController@index')->with('alert_message', 'Berhasil Mengubah Data');
        }else{
            return redirect()->action('PengaduanController@index')->with('alert_message', 'Gagal Mengubah Data');
        }
    }

    public function hapus($id)
    {
        TanggapanModel::where('id_pengaduan', $id)->delete();
        PengaduanModel::where('id_pengaduan', $id)->delete();

        return redirect()->action('PengaduanController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function cetak_pdf()
    {
        set_time_limit(300);
        $data = PengaduanModel::join('masyarakat','masyarakat.nik','pengaduan.nik')->get();
 
        $pdf = PDF::loadview('pengaduan.laporan_pengaduan',compact('data'));
        return $pdf->stream();
    }

    

}
