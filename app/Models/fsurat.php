<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fsurat extends Model
{
    protected $table = "fsurat";
    protected $primarykey = "id";
    protected $fillable =[
        'id',
        'nama',
        'nama_instansi',
        'nip',
        'perihal',
        'alamat_pemohon',
        'no_telepon',
        'lampiran_surat',
        'status',
        'pengambilan',
        'delstatus',
    ];
}