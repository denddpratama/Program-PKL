<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fsurat;
use App\Models\pegawai;
use App\Models\tanaman;

class fsuratController extends Controller
{
    public function HalamanProfilBidang(){
        return view('halaman-user.bidang');
    }
    
    public function HalamanFormSurat(){
        return view('halaman-user.form-surat');
    }

    public function SimpanFormSurat(Request $request)
    {

        $request->validate([
            'lampiran_surat' => 'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:10048',
        ], [
            'lampiran_surat.required' => 'File lampiran surat harus diunggah.',
            'lampiran_surat.file' => 'File lampiran surat harus berupa file.',
            'lampiran_surat.mimes' => 'File lampiran surat harus berformat PDF, DOC, JPG, PNG, JPEG, atau DOCX.',
            'lampiran_surat.max' => 'Ukuran file lampiran surat tidak boleh lebih dari 10 MB.',
        ]);
        

        $sur = $request->file('lampiran_surat');

        $nmsur = time().rand(100,999).'.'.$request->file('lampiran_surat')->getClientOriginalName();
        
        $sur->move(public_path().'/lampiran',$nmsur);

        fsurat::create([
            'nama' => $request->nama,
            'nama_instansi' => $request->nama_instansi,
            'nip' => $request ->nip,
            'perihal' => $request ->perihal,
            'alamat_pemohon' => $request->alamat_pemohon,
            'no_telepon' => $request->no_telepon,
            'lampiran_surat' => $nmsur,
            'status' => 'Pemeriksaan Surat',
            'pengambilan' => null,
            'delstatus' => true,

        ]);
        return redirect('form-surat');
    }


    public function HalamanStatusSurat(){
        $srt = fsurat::where('delstatus','=',true)->latest()->get();
        return view('halaman-user.status-surat', compact('srt'));

    }

    public function Tampil($id){
        $pgw = pegawai::where('delstatus', true)->latest()->get();
        $tmn = tanaman::where('delstatus', true)->latest()->get();
        $single = fsurat::where('id', $id)->first();
        return view('halaman-user.tampil', compact('single', 'pgw','tmn'));
    }

}
