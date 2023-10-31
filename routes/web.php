<?php

use App\Http\Controllers\suratController;
use App\Http\Controllers\fsuratController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home-user');
});


// HALAMAN UTAMA USER //
route::get('/form-surat',[fsuratController::class,'HalamanFormSurat' ]);
route::get('/bidang',[fsuratController::class,'HalamanProfilBidang' ]);
route::post('/simpan-formsurat',[fsuratController::class,'SimpanFormSurat' ]);
route::get('/status-surat',[fsuratController::class,'HalamanStatusSurat' ]);
route::get('/tampil/{id}',[fsuratController::class,'Tampil' ]);

// LOGIN ADMIN //
route::get('/login',[loginController::class,'tampilLogin'])->name('login');
route::post('/post-login',[loginController::class,'postLogin'])->name('post-login');
route::get('/logout',[loginController::class,'logout']);


// HALAMAN ADMIN //
route::middleware(['auth'])->group( function (){

    route::get('/home-admin',[adminController::class,'HomeAdmin' ]);

    // DATA SURAT MASUK //
    route::get('/surat-masuk',[suratController::class,'HalamanSuratMasuk' ]);
    route::get('/hapus-suratmasuk/{id}',[suratController::class,'HapusSuratMasuk']);
    route::get('/tambah-status/{id}',[suratController::class,'TambahStatus']);
    route::post('/simpan-status/{id}',[suratController::class,'SimpanStatus']);


    // DATA BERITA ACARA //
    route::get('/berita-acara',[suratController::class,'HalamanBeritaAcara' ]);
    route::get('/form-printberitaacara',[suratController::class,'TambahPrint' ]);
    route::get('/print/{id}',[suratController::class,'singleBeritaAcara' ]);

    // DATA MASTER ADMIN //
    route::get('/admin',[adminController::class,'Admin' ]);
    route::get('/tambah-admin',[adminController::class,'TambahAdmin' ]);
    route::post('/simpan-admin',[adminController::class,'SimpanAdmin' ]);
    route::get('/ubah-admin/{id}',[adminController::class,'UbahAdmin']);
    route::post('/simpan-perubahanadmin/{id}',[adminController::class,'SimpanPerubahanAdmin']);
    route::get('/hapus-admin/{id}',[adminController::class,'HapusAdmin']);
    
    // DATA MASTER ADMIN - JABATAN //
    route::get('/jabatan',[adminController::class,'Jabatan' ]);
    route::get('/tambah-jabatan',[adminController::class,'TambahJabatan' ]);
    route::post('/simpan-jabatan',[adminController::class,'SimpanJabatan' ]);
    route::get('/ubah-jabatan/{id}',[adminController::class,'UbahJabatan']);
    route::post('/simpan-perubahanjabatan/{id}',[adminController::class,'SimpanPerubahanJabatan']);
    route::get('/hapus-jabatan/{id}',[adminController::class,'HapusJabatan']);

    // DATA MASTER ADMIN - TANAMAN //
    route::get('/tanaman',[adminController::class,'Tanaman' ]);
    route::get('/tambah-tanaman',[adminController::class,'TambahTanaman' ]);
    route::post('/simpan-tanaman',[adminController::class,'SimpanTanaman' ]);
    route::get('/ubah-tanaman/{id}',[adminController::class,'UbahTanaman']);
    route::post('/simpan-perubahantanaman/{id}',[adminController::class,'SimpanPerubahanTanaman']);
    route::get('/hapus-tanaman/{id}',[adminController::class,'HapusTanaman']);

    // DATA MASTER ADMIN - PEGAWAI //
    route::get('/pegawai',[adminController::class,'Pegawai' ]);
    route::get('/tambah-pegawai',[adminController::class,'TambahPegawai' ]);
    route::post('/simpan-pegawai',[adminController::class,'SimpanPegawai' ]);
    route::get('/ubah-pegawai/{id}',[adminController::class,'UbahPegawai']);
    route::post('/simpan-perubahanpegawai/{id}',[adminController::class,'SimpanPerubahanPegawai']);
    route::get('/hapus-pegawai/{id}',[adminController::class,'HapusPegawai']);
});