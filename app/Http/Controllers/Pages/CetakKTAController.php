<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\AngkatanMapaba;

class CetakKTAController extends Controller
{
    public function show()
    {
        $angkatan_mapaba = AngkatanMapaba::all();

        return view("pages.cetak-kta", compact('angkatan_mapaba'));
    }

    public function store(Request $request)
    {
        $anggota = Anggota::where('nim', $request->nim)->first();
        dd($anggota->kta_id);
    }
}
