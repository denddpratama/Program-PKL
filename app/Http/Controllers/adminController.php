<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan;
use App\Models\tanaman;
use App\Models\pegawai;
use App\Models\User;
use App\Models\fsurat;


class adminController extends Controller
{
    // ADMIN //
    public function HomeAdmin(){
        $jumlahUser=User::count();
        $jumlahSurat=fsurat::count();
        $jumlahBerita=fsurat::count();
        return view('home-admin', compact('jumlahUser', 'jumlahSurat','jumlahBerita'));
    }

    public function Admin(){
        $adm = user::where('delstatus','=',true)->latest()->get();
        return view('master-admin.admin', compact('adm'));
    }

    public function TambahAdmin(){
        return view('master-admin.tambah-admin');
    }

    public function SimpanAdmin(Request $request)
    {
        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return redirect('admin');
    }

    // UBAH ADMIN //
    public function UbahAdmin($id)
    {
        $adm = User::findOrFail($id);
        return view('master-admin.ubah-admin', compact('adm'));
    }
    
    public function SimpanPerubahanAdmin(Request $request, $id)
    {
        if ($request->password){
            $adm = User::findOrFail($id);
            $data = [
                'name'=>$request->name,
                'level'=>$request->level,
                'email'=>$request->email,
                'password'=>$request->password,
            ];
        $adm->update($data);
        return redirect('admin');
        }else{
            return back();
        };
        
    }

    public function HapusAdmin($id)
    {
        // ADMIN HAPUS DELSTATUS //
        //$adm = User::findOrFail($id);
        //$data = ['delstatus' => false,];
        //$adm->update($data);
        //return back();

        $adm = User::findOrFail($id);
        $adm->delete($adm);
        return redirect('admin');
    }



    // JABATAN //
    public function Jabatan(){
        $jbt = jabatan::where('delstatus','=',true)->latest()->get();
        return view('master-admin.jabatan', compact('jbt'));
    }

    public function TambahJabatan(){
        return view('master-admin.tambah-jabatan');
    }

    public function SimpanJabatan(Request $request)
    {
        jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
            'delstatus' => true,

        ]);
        return redirect('jabatan');
    }

    // UBAH JABATAN //
    public function UbahJabatan($id)
    {
        $jbt = jabatan::findOrFail($id);
        return view('master-admin.ubah-jabatan', compact('jbt'));
    }
    
    public function SimpanPerubahanJabatan(Request $request, $id)
    {
        if ($request->id){
            $jbt = jabatan::findOrFail($id);
            $data = [
                'nama_jabatan'=>$request->nama_jabatan,
            ];
        $jbt->update($data);
        return redirect('jabatan');
        }else{
            return back();
        };
        
    }

    public function HapusJabatan($id)
    {
        $jbt = jabatan::findOrFail($id);
        $jbt->delete($jbt);
        return redirect('jabatan');
    }

    // TANAMAN //
    public function Tanaman(){
        $tmn = tanaman::where('delstatus','=',true)->latest()->get();
        return view('master-admin.tanaman', compact('tmn'));
    }

    public function TambahTanaman(){
        return view('master-admin.tambah-tanaman');
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

    // UBAH TANAMAN //
    public function UbahTanaman($id)
    {
        $tmn = tanaman::findOrFail($id);
        return view('master-admin.ubah-tanaman', compact('tmn'));
    }
    
    public function SimpanPerubahanTanaman(Request $request, $id)
    {
        if ($request->id){
            $tmn = tanaman::findOrFail($id);
            $data = [
                'nama_tanaman'=>$request->nama_tanaman,
                'jumlah'=>$request->jumlah,
            ];
        $tmn->update($data);
        return redirect('tanaman');
        }else{
            return back();
        };
        
    }

    public function HapusTanaman($id)
    {
        $tmn = tanaman::findOrFail($id);
        $tmn->delete($tmn);
        return redirect('tanaman');
    }

    // PEGAWAI //
    public function Pegawai(){
        $pgw = pegawai::with('jabatan')->where('delstatus','=',true)->latest()->get();
        $jbt = jabatan::all();
        return view('master-admin.pegawai', compact('pgw', 'jbt'));
    }

    public function TambahPegawai(){
        $pgw = pegawai::with('jabatan')->where('delstatus','=',true)->latest()->get();
        $jbt = jabatan::all();
        return view('master-admin.tambah-pegawai', compact('pgw', 'jbt'));
    }

    public function SimpanPegawai(Request $request)
    {
        pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'id_jabatan' => $request->id_jabatan,
            'nip_pegawai' => $request->nip_pegawai,
            'alamat_pegawai' => $request->alamat_pegawai,
            'delstatus' => true,

        ]);
        return redirect('pegawai');
    }

    // UBAH PEGAWAI //
    public function UbahPegawai($id)
    {
        $pgw = pegawai::findOrFail($id);
        $jbt = Jabatan::all();
        return view('master-admin.ubah-pegawai', compact('pgw', 'jbt'));
    }
    
    public function SimpanPerubahanPegawai(Request $request, $id)
    {
        if ($request->id){
            $pgw = pegawai::findOrFail($id);
            $data = [
                'nama_pegawai' => $request->nama_pegawai,
                'id_jabatan' => $request->id_jabatan,
                'nip_pegawai' => $request->nip_pegawai,
                'alamat_pegawai' => $request->alamat_pegawai,
            ];
        $pgw->update($data);
        return redirect('pegawai');
        }else{
            return back();
        };
        
    }

    public function HapusPegawai($id)
    {
        $pgw = pegawai::findOrFail($id);
        $pgw->delete($pgw);
        return redirect('pegawai');
    }
}
