<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berica extends Model
{
    protected $table = "fsurat";
    protected $primarykey = "id";
    protected $fillable =[
        'id',
        'nama',
        'nip',
        'alamat_pemohon',
        'no_telepon',
        'id_tanaman',
        'id_pegawai',
        'status',
        'delstatus',
    ];

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class,"id_pegawai");
    }

    public function tanaman()
    {
        return $this->belongsTo(tanaman::class,"id_tanaman");
    }
}
