<?php
// app/Models/CategoryPengurus.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPengurus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'categorypengurus';

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class);
    }
}

