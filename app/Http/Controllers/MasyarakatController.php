<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasyarakatModel;
use Validator;
use Session;
use Auth;


class MasyarakatController extends Controller
{
    public function index()
    {
        return view('login.login_masyarakat');
    }
    public function cek(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'password'=>'required',
        ]);
        $proses=MasyarakatModel::where('username',$req->username)->where('password',md5($req->password));
        if($proses->count()>0){
            $data=$proses->first();
            Session::put('nik',$data->nik);
            Session::put('nama',$data->nama);
            Session::put('username',$data->username);
            Session::put('password',$data->password);
            Session::put('telp',$data->telp);
            Session::put('cek_login_masyarakat',true);
            return redirect('/');
        }else{
            Session::flash('alert_message','Username dan Password tidak cocok');
            return redirect('login_masyarakat');
        }
    }
    public function create()
    {
        return view('user.register_masyarakat');
    }
    public function store(Request $request)
    {
        $cekData = MasyarakatModel::where('username', $request->username)->exists();

        if ($cekData) {
            return redirect('login_admin')->with('alert_message', 'Username sudah terdafar');
        }
        MasyarakatModel::create([
            'nik'           => $request->nik,
            'nama'          => $request->nama,
            'username'      => $request->username,
            'password'      => md5($request->password),
            'telp'          => $request->telp,
        ]);        
        return redirect()->action('MasyarakatController@index');
    }
    public function getLogout(Request $request)
    {
        $request->session()->forget('nik');
        $request->session()->flush();
        return redirect('/');
    }


    public function user()
    {
            $data['datas']=MasyarakatModel::all();
            return view('user.userpage',$data);
    }

    public function detail($id)
    {
        $data = MasyarakatModel::where('nik', $id)->get();
        return view('user.detail_user', compact('data'));
    }

    public function hapus($id)
    {
        MasyarakatModel::where('nik', $id)->delete();

        return redirect()->action('MasyarakatController@user')->with('alert_message', 'Berhasil Menghapus Data');
    }
}
