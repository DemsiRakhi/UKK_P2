<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\PengaduanModel;

Route::get('/', function () {
    if(Session('cek_login_masyarakat') == true){
        $id = Session::get('nik');
        $data['datas']=PengaduanModel::where('nik',$id)->get();
        return view('welcome', $data);
    }else{
        return view('welcome');
    }
});

Route::get('/home', function () {
    return view('welcome_petugas');
});

Route::get('/petugas','LoginController@petugas');


/** CEK LOGIN ADMIN */
Route::group(['middleware'=>'cek_login'],function(){

    Route::get('/dashboard','PageController@index');

    Route::get('/adminpage','LoginController@admin');
    Route::get('/adminpage/hapus/{id}', "LoginController@hapus");
    Route::get('/adminpage/detail/{id}', "LoginController@detail");
    
    Route::get('/userpage','MasyarakatController@user');
    Route::get('/userpage/hapus/{id}', "MasyarakatController@hapus");
    Route::get('/userpage/detail/{id}', "MasyarakatController@detail");
    
    Route::get('/pengaduan','PengaduanController@index');
    Route::get('/pengaduan/edit/{id}', "PengaduanController@edit");
    Route::post('/pengaduan/update/{id}/save', "PengaduanController@update")->name('editPengaduan');
    Route::get('/pengaduan/hapus/{id}', "PengaduanController@hapus");
    Route::get('/pengaduan/detail/{id}', "PengaduanController@detail");
    Route::get('/pengaduan/cetak_pdf_pengaduan', 'PengaduanController@cetak_pdf');
    
    Route::get('/tanggapan','TanggapanController@index');
    Route::get('/tanggapan/edit/{id}', "TanggapanController@edit");
    Route::post('/tanggapan/update/{id}/save', "TanggapanController@update")->name('editTanggapan');
    Route::get('/create_tanggapan','TanggapanController@create')->name('tanggapanGet');
    Route::get('/tanggapan/create/{id}','TanggapanController@create');
    Route::post('/tanggapan/store/','TanggapanController@store')->name('tanggapan.store');
    Route::get('/tanggapan/hapus/{id}', "TanggapanController@hapus");
    Route::get('/tanggapan/detail/{id}', "TanggapanController@detail");
    Route::get('/tanggapan/cetak_pdf_tanggapan',"TanggapanController@cetak_pdf");

    Route::get('/dashboard','LoginController@dashboard');

});

/* LOGIN USER */ 
Route::get('/login_masyarakat','MasyarakatController@index');
Route::post('/masyarakat/cek','MasyarakatController@cek');
Route::get('/register_masyarakat','MasyarakatController@create');
Route::get('/masyarakat/create','MasyarakatController@create');
Route::post('/masyarakat/store','MasyarakatController@store') ->name('masyarakat.store');
Route::get('/logout_masyarakat','MasyarakatController@getLogout');

/* LOGIN ADMIN/PETUGAS */ 
Route::get('/login_admin','LoginController@index');
Route::post('/loginadmin/cek','LoginController@cek');
Route::get('/register_admin','LoginController@create');
Route::get('/loginadmin/create','LoginController@create');
Route::post('/loginadmin/store','LoginController@store') ->name('login.store');
Route::get('/logout_admin','LoginController@getLogout');
Route::get('/logout_petugas','LoginController@getLogoutpetugas');


/** CEK LOGIN MASYARAKAT */
Route::group(['middleware'=>'cek_login_masyarakat'],function(){

    Route::get('/create_pengaduan','PengaduanController@create');
    Route::get('/pengaduan/create','PengaduanController@create');
    Route::post('/pengaduan/store','PengaduanController@store') ->name('pengaduan.store');
    
    });
