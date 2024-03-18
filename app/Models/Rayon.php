<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Rayon extends Model
{
    use Sushi;
    protected $rows = [
        ['id' => 1, 'nama'=> 'Pengurus Komisariat Unusia Bogor'],
        ['id' => 2, 'nama'=> 'Pengurus Rayon FTIK Unusia Bogor'],
        ['id' => 3, 'nama'=> 'Pengurus Rayon FKIP Unusia Bogor'],
        ['id' => 4, 'nama'=> 'Pengurus Rayon Fajrul Falakh Unusia Bogor'],
        ['id' => 5, 'nama'=> 'Pengurus Rayon Nusantara Unusia Bogor'],
        ['id' => 6, 'nama'=> 'Pengurus Rayon FEB Unusia Bogor'],
    ];
}
