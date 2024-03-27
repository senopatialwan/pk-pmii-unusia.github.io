<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Rayon;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $rayon = Rayon::get();
        return view('pages.anggota.index', compact('rayon'));
    }

    public function show($pengurus)
    {
        $pengurus = Rayon::where('slug', $pengurus)->first();
        $anggota = Anggota::where('rayon_id', $pengurus->id)->get();
        return view('pages.anggota.show', compact('pengurus', 'anggota'));
    }
}
