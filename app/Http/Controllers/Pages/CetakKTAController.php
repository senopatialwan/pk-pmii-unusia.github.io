<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\CetakKTARequest;
use App\Models\Anggota;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\AngkatanMapaba;
use Barryvdh\DomPDF\Facade\Pdf;

class CetakKTAController extends Controller
{
    public function show()
    {
        $angkatan_mapaba = AngkatanMapaba::all();

        return view("pages.cetak-kta", compact('angkatan_mapaba'));
    }

    public function store(CetakKTARequest $request)
    {
        $anggota = Anggota::where('nama_lengkap', $request->nama_lengkap)
            ->where('email', $request->email)
            ->where('nim', $request->nim)
            ->first();

        if ($anggota->status == 1) {
            return redirect()->route('cetak-kta.print', $anggota->kta_id);
        } else {
            return redirect()->back()->with([
                'message' => 'Masih dalam tahap pengajuan.',
                'alert-type' => 'danger',
            ]);
        }
    }

    public function tesKTA()
    {
        return view('pages.id-cetak-kta');
    }

    public function cetakKTA($kta_id)
    {
        $anggota = Anggota::where('kta_id', $kta_id)->first();
        return view('pages.id-cetak-kta', compact('anggota'));
    }

    public function downloadPDF($kta_id)
    {
        $anggota = Anggota::where('kta_id', $kta_id)->first();
        $pdf = PDF::loadView('pages.kta_pdf', compact('anggota')); // Perbaikan ada di sini
        return $pdf->download('KTA_PMII_UNUSIA_BOGOR.pdf');
    }
    
}
