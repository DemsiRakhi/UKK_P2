<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengaduanModel;
use App\TanggapanModel;
use App\LoginModel;
use Session;
use PDF;

class TanggapanController extends Controller
{
    public function index()
    {
        $data['datas']=TanggapanModel::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')->join('petugas','petugas.id_petugas','tanggapan.id_petugas')->get(); 
        return view("tanggapan.tanggapan",$data);
    }

    public function create($id)
    {
        $data = PengaduanModel::where('id_pengaduan', $id)->first();
        return view('create_tanggapan', compact('data'));
    }

    public function store(Request $request)
    {
        if(Session()->has('id_petugas')){
        TanggapanModel::create([
            'id_pengaduan'      => $request->id_pengaduan,
            'tgl_tanggapan'     => $request->tgl_tanggapan,
            'tanggapan'         => $request->tanggapan,
            'id_petugas'        => Session()->get('id_petugas'),
        ]);    
    }      
        return redirect()->action('TanggapanController@index')->with('alert_message', 'Berhasil Melakukan Tanggapan');
    }

    public function edit($id)
    {
        $data = TanggapanModel::where('id_tanggapan', $id)->join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')->join('petugas','petugas.id_petugas','tanggapan.id_petugas')->get();
        return view('tanggapan.edit_tanggapan',['tanggapan'=>$data]);
    }
    
    public function detail($id)
    {
        $data = TanggapanModel::where('id_tanggapan', $id)->join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')->join('petugas','petugas.id_petugas','tanggapan.id_petugas')->get();
        return view('tanggapan.detail_tanggapan', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = TanggapanModel::where('id_tanggapan', $request->id)->update([
            'tgl_tanggapan'     => $request->tgl_tanggapan,
            'tanggapan'         => $request->tanggapan,
        ]);  
        if($data){
            return redirect('/pengaduan')->with('alert_message', 'Berhasil Mengubah Data');
        }else{
            return redirect('/pengaduan')->with('alert_message', 'Gagal Mengubah Data');
        }

    }

    public function hapus($id)
    {
        TanggapanModel::where('id_tanggapan', $id)->delete();

        return redirect()->action('TanggapanController@index')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function cetak_pdf()
    {
        set_time_limit(300);
        $tanggapan = TanggapanModel::join('pengaduan','pengaduan.id_pengaduan','tanggapan.id_pengaduan')->join('petugas','petugas.id_petugas','tanggapan.id_petugas')->get();
 
        $pdf = PDF::loadview('tanggapan.laporan_tanggapan',['tanggapan'=>$tanggapan]);
        return $pdf->stream();
    }

    
}
