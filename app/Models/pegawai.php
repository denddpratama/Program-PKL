<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";
    protected $primarykey = "id";
    protected $fillable =[
        'id',
        'nama_pegawai',
        'id_jabatan',
        'nip_pegawai',
        'alamat_pegawai',
        'delstatus',
    ];

    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,"id_jabatan");
    }
}
