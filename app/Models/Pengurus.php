<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;


class Pengurus extends Model
{
    use HasFactory, Uuids;
    protected $table = 'pengurus';
    protected $primaryKey = "id";
    protected $fillable = [
        "nama_lengkap",
        "email",
        "jabatan",
        "facebook",
        "instagram",
        "twitter",
        "linkedin",
    ];
    // if email sama dengan user
    // if email sama dengan anggota
}
