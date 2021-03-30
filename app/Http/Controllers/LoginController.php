<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;
use App\PengaduanModel;
use App\TanggapanModel;
use Validator;
use Session;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login_admin');
    }

    public function dashboard() 
    {
        $pengaduan1 = PengaduanModel::count();
        $tanggapan1 = TanggapanModel::count();
        return view('/dashboard', compact('pengaduan1','tanggapan1'));
    }

    public function petugas()
    {
        $pengaduan1 = PengaduanModel::count();
        $tanggapan1 = TanggapanModel::count();
        return view('/dashboard', compact('pengaduan1','tanggapan1'));
    }

    public function cek(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'password'=>'required',
        ]);
        $proses=LoginModel::where('username',$req->username)->where('password',md5($req->password));
        if($proses->count() > 0){
            $data=$proses->first();
            Session::put('id_petugas',$data->id_petugas);
            Session::put('nama_petugas',$data->nama_petugas);
            Session::put('username',$data->username);
            Session::put('password',$data->password);
            Session::put('telp',$data->telp);
            Session::put('level',$data->level);
            Session::put('cek_login',true);
            if(Session::get('level') == 'admin'){
                return redirect()->action('LoginController@dashboard');
            }else{
                return redirect()->action('LoginController@dashboard'); 
            }
        }else{
            Session::flash('alert_message','Username dan Password tidak cocok');
            return redirect('login_admin');
        }
    }
    public function create()
    {
        return view('login.register_admin');
    }
    public function store(Request $request)
    {
        $cekData = LoginModel::where('username', $request->username)->exists();

        if ($cekData) {
            return redirect('login_admin')->with('alert_message', 'Username sudah terdafar');
        }
        LoginModel::create([
            'nama_petugas'  => $request->nama_petugas,
            'username'      => $request->username,
            'password'      => md5($request->password),
            'telp'          => $request->telp,
            'level'          => $request->level,
        ]);        
        return redirect()->action('LoginController@index');
    }
    public function getLogout(Request $request)
    {
        $request->session()->forget('id_petugas');
        $request->session()->flush();
        return redirect('/login_admin');
    }

    public function admin()
    {
            $data['datas']=LoginModel::all();
            return view('admin.admin',$data);
    }

    public function detail($id)
    {
        $data = LoginModel::where('id_petugas', $id)->get();
        return view('admin.detail_admin', compact('data'));
    }

    public function hapus($id)
    {
        LoginModel::where('id_petugas', $id)->delete();

        return redirect()->action('LoginController@admin')->with('alert_message', 'Berhasil Menghapus Data');
    }

    public function getLogoutpetugas(Request $request)
    {
        $request->session()->forget('id_petugas');
        $request->session()->flush();
        return redirect('/home');
    }

    
}
