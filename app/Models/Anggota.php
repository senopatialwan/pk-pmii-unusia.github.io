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
        "alamat",
        "rayon_id",
        "fakultas_id",
        "prodi_id",
        "angkatan_mapaba_id",
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
    public function rayon(): BelongsTo
    {
        return $this->belongsTo(Rayon::class, 'rayon_id');
    }
    public function angkatan_mapaba(): BelongsTo
    {
        return $this->belongsTo(AngkatanMapaba::class, 'angkatan_mapaba_id');
    }
    // if email sama dengan user
    // if email sama dengan pengurus
}
