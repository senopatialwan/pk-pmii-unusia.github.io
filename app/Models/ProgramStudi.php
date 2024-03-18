<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Sushi\Sushi;


class ProgramStudi extends Model
{
    use Sushi;

    protected $rows = [
        // Fakultas Teknik dan Ilmu Komputer
        ['id' => 1, 'nama' => 'Teknik Informatika', 'fakultas_id' => 1],
        ['id' => 2, 'nama' => 'Sistem Informasi', 'fakultas_id' => 1],
        ['id' => 3, 'nama' => 'Teknologi Agroindustri', 'fakultas_id' => 1],

        // Fakultas Ekonomi dan Bisnis
        ['id' => 4, 'nama' => 'Akuntansi', 'fakultas_id' => 2],
        ['id' => 5, 'nama' => 'Ekonomi Syariah', 'fakultas_id' => 2],

        // Fakultas Hukum
        ['id' => 6, 'nama' => 'Ilmu Hukum', 'fakultas_id' => 3],
        ['id' => 7, 'nama' => 'Ahwal Syakhsiyyah (Hukum Keluarga)', 'fakultas_id' => 3],

        // Fakultas Islam Nusantara
        ['id' => 8, 'nama' => 'Sejarah Peradaban Islam', 'fakultas_id' => 4],

        // Fakultas Keguruan dan Ilmu Pendidikan
        ['id' => 9, 'nama' => 'Pendidikan Agama Islam', 'fakultas_id' => 5],
        ['id' => 10, 'nama' => 'Pendidikan Guru Madrasah Ibtidaiyah (SD)', 'fakultas_id' => 5],
        ['id' => 11, 'nama' => 'Pendidikan Guru PAUD', 'fakultas_id' => 5],
        ['id' => 12, 'nama' => 'Pendidikan Bahasa Inggris', 'fakultas_id' => 5],

        // Fakultas Ilmu Sosial
        ['id' => 13, 'nama' => 'Psikologi', 'fakultas_id' => 6],
        ['id' => 14, 'nama' => 'Sosiologi', 'fakultas_id' => 6],
    ];

    public function anggota(): HasMany
    {
        return $this->hasMany(Anggota::class, 'fakultas_id');
    }
    // Relasi dengan model Fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
