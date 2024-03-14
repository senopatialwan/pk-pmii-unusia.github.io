<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Files extends Model
{
    use HasFactory, Uuids;
    protected $table = 'files';
    protected $primaryKey = "id";

    protected $fillable = ['path'];
}
