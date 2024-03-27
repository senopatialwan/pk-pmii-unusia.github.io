<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Rayon extends Model
{
    use Sushi;
    protected $rows = [
        ['id' => 1, 'slug'=> 'komisariat-unusia', 'nama'=> 'Pengurus Komisariat Unusia Bogor'],
        ['id' => 2, 'slug'=> 'rayon-ftik', 'nama'=> 'Pengurus Rayon FTIK Unusia Bogor'],
        ['id' => 3, 'slug'=> 'rayon-fkip', 'nama'=> 'Pengurus Rayon FKIP Unusia Bogor'],
        ['id' => 4, 'slug'=> 'rayon-ff', 'nama'=> 'Pengurus Rayon Fajrul Falakh Unusia Bogor'],
        ['id' => 5, 'slug'=> 'rayon-nusantara', 'nama'=> 'Pengurus Rayon Nusantara Unusia Bogor'],
        ['id' => 6, 'slug'=> 'rayon-feb', 'nama'=> 'Pengurus Rayon FEB Unusia Bogor'],
    ];
}
