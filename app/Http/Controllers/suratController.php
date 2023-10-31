<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fsurat;
use App\Models\pegawai;
use App\Models\tanaman;


class suratController extends Controller
{
    
    // SURAT MASUK //
    public function HalamanSuratMasuk(){
        $srt = fsurat::where('delstatus','=',true)->latest()->get();
        return view('halaman-admin.surat-masuk', compact('srt'));
    }

    public function HalamanBeritaAcara(){
        $srt = fsurat::where('delstatus','=',true)->latest()->get();
        return view('halaman-admin.berita-acara', compact('srt'));
    }
    
    public function HapusSuratMasuk($id)
    {
        $srt = fsurat::findOrFail($id);
        $data = ['delstatus' => false,];
        $srt->update($data);
        return back();
    }

    // TAMBAH STATUS //

    public function TambahStatus($id){

        $tmb = fsurat::findOrFail($id);

        return view('halaman-admin.tambah-status',compact('tmb'));
    }

    public function SimpanStatus(Request $request, $id)
    {
        $ss = fsurat::findOrFail($id);

        $data = [
            'status' => $request->status,
            'pengambilan' => $request->pengambilan,
        ];

        $ss->update($data);
        return redirect ('surat-masuk');
    }

    // PRINT BERITA ACARA //
    
    public function TambahPrint(){
        $pgw = pegawai::all();
        $tmn = tanaman::all();
        return view('halaman-admin.form-printberitaacara', compact('pgw','tmn'));
    }

    public function SimpanTanaman(Request $request)
    {
        tanaman::create([
            'nama_tanaman' => $request->nama_tanaman,
            'jumlah' => $request->jumlah,
            'delstatus' => true,

        ]);
        return redirect('tanaman');
    }

    // PRINT //


    public function singleBeritaAcara($id){
        $pgw = pegawai::where('delstatus', true)->latest()->get();
        $tmn = tanaman::where('delstatus', true)->latest()->get();
        $single = fsurat::where('id', $id)->first();
        return view('halaman-admin.print', compact('single', 'pgw','tmn'));
    }
    
    
    
}

