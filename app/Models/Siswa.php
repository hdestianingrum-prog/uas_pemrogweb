<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // Nama tabel sesuai migration
    protected $fillable = ['nama', 'umur', 'kelas', 'alamat'];
}
