<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanaman extends Model
{
    protected $table = "tanaman";
    protected $primarykey = "id";
    protected $fillable =[
        'id',
        'nama_tanaman',
        'jumlah',
        'delstatus',
    ];
}
