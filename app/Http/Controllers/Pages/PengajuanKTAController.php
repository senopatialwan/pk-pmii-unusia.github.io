<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\PengajuanKTARequest;
use Illuminate\Http\Request;
use App\Traits\Upload;
use App\Models\Anggota;

class PengajuanKTAController extends Controller
{
    use Upload;

    public function index()
    {
        $anggota = Anggota::first();
        return view("pages.pengajuan-kta", ['anggota'=> $anggota]);
    }

    public function store(PengajuanKTARequest $request)
    {
        $anggota = Anggota::create($request->all());
        $sertifikat_mapaba = $this->UploadFile($request->file('sertifikat_mapaba'), 'anggota/sertifikat_mapaba', $request->nim);
        $foto = $this->UploadFile($request->file('foto'), 'anggota/foto', $request->nim);
        $cv = $this->UploadFile($request->file('cv'), 'anggota/cv', $request->nim);
        $ktm = $this->UploadFile($request->file('ktm'), 'anggota/ktm', $request->nim);
        $anggota->update([
            'sertifikat_mapaba' => 'storage/' . $sertifikat_mapaba,
            'foto' => 'storage/' . $foto,
            'cv' => 'storage/' . $cv,
            'ktm' => 'storage/' . $ktm,
        ]);
        return redirect()->back();
    }
}
