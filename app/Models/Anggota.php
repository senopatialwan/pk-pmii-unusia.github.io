<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        "fakultas_id",
        "prodi_id",
        "alamat",
        "angkatan_mapaba",
        "nomor_telepon",
        "sertifikat_mapaba",
        "foto",
        "cv",
        "ktm",
        "status",
    ];

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
    public function prodi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'prodi_id');
    }
    // if email sama dengan user
    // if email sama dengan pengurus
}
