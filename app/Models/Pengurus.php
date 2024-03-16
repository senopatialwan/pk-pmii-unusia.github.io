<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Support\Facades\Storage;

class Pengurus extends Model
{
    use HasFactory, Uuids;

    protected $table = 'pengurus';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_lengkap',
        'image',
        'email',
        'jabatan',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
    ];

    public function getImageUrlAttribute()
    {
        return Storage::url($this->image);
    }

    /**
     * Check if the provided email exists in the 'user' table.
     *
     * @param  string  $email
     * @return bool
     */
    public static function isUser($email)
    {
        return User::where('email', $email)->exists();
    }

    /**
     * Check if the provided email exists in the 'anggota' table.
     *
     * @param  string  $email
     * @return bool
     */
    public static function isAnggota($email)
    {
        return Anggota::where('email', $email)->exists();
    }
}
