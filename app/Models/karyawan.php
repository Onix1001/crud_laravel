<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';
    protected $primarykey = 'id';
    protected $fillable =['nama', 'email', 'telepon', 'alamat', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir'];
}
