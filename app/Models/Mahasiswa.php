<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";
    protected $fillable = [
        'nim', 'nama_lengkap', 'kelas', 'jurusan', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat'
    ];
}
