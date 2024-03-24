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
        return redirect()->route('id-cetak-kta', $anggota->kta_id);
    }

    public function tesKTA()
    {
        return view('pages.id-cetak-kta');
    }
    public function cetakKTA($anggota)
    {
        $anggota = Anggota::where('kta_id', $anggota)->first();
        return view('pages.id-cetak-kta', compact('anggota'));
    }
}
