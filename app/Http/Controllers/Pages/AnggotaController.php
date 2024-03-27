<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Rayon;
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
        return view('pages.anggota.show', compact('pengurus'));
    }
}
