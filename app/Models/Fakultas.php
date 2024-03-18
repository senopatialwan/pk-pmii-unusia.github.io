<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Sushi\Sushi;

class Fakultas extends Model
{
    use Sushi;

    protected $rows = [
        ['id' => 1, 'nama' => 'Fakultas Teknik dan Ilmu Komputer'],
        ['id' => 2, 'nama' => 'Fakultas Ekonomi dan Bisnis'],
        ['id'=> 3, 'nama'=> 'Fakultas Hukum'],
        ['id'=> 4,'nama'=> 'Fakultas Islam Nusantara'],
        ['id'=> 5,'nama'=> 'Fakultas Keguruan dan Ilmu Pendidikan'],
        ['id'=> 6,'nama'=> 'Fakultas Ilmu Sosial'],
    ];

    public function anggota(): HasMany
    {
        return $this->hasMany(Anggota::class, 'fakultas_id');
    }
    public function programStudi(): HasMany
    {
        return $this->hasMany(ProgramStudi::class);
    }
}
