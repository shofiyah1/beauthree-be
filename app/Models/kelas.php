<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $guarded='kelas';
    protected $fillable = [
        'nama_kelas',
        'jenis_kelas',
        'kode_kelas',
        'tahun_ajar',
        // add more attributes here as needed
    ];
}
