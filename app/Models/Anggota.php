<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Anggota extends Model
{
    use HasFactory, Uuids;
    protected $table = 'anggota';
    protected $primaryKey = "id";
    protected $fillable = [
        "nama_lengkap",
        "email",
        "nim",
        "rayon",
        "fakultas",
        "prodi",
        "alamat",
        "angkatan_mapaba",
        "nomor_telepon",
        "status"
    ];
    // if email sama dengan user
    // if email sama dengan pengurus
}
