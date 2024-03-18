<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\PengajuanKTARequest;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Traits\Upload;
use App\Models\Anggota;

class PengajuanKTAController extends Controller
{
    use Upload;

    public function index()
    {
        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        // TODO: Model Rayon/Komi dan AngkatanMapaba
        $data = [
            "fakultas"=> $fakultas,
            "prodi"=> $prodi
        ];
        return view("pages.pengajuan-kta", $data);
    }

    public function store(PengajuanKTARequest $request)
    {
        $anggota = Anggota::create($request->all());
        // TODO: Buat ulang migrasi anggota lalu input model baru [fakultas_id, prodi_id, rayon/komi_id,angkatan_id]
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
