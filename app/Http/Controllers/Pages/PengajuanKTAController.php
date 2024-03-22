<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\PengajuanKTARequest;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Traits\Upload;
use App\Models\Anggota;
use App\Models\AngkatanMapaba;
use App\Models\Rayon;

class PengajuanKTAController extends Controller
{
    use Upload;

    public function index()
    {
        $rayon = Rayon::all();
        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        $angkatan_mapaba = AngkatanMapaba::all();

        return view("pages.pengajuan-kta", compact('rayon', 'fakultas', 'prodi', 'angkatan_mapaba'));
    }

    public function store(PengajuanKTARequest $request)
    {
        $anggota = Anggota::create($request->all());
        $sertifikat_mapaba = $this->UploadFile($request->file('sertifikat_mapaba'), '/anggota/' . $anggota->nim, 'sertifikat_mapaba');
        $foto = $this->UploadFile($request->file('foto'), '/anggota/' . $anggota->nim, 'foto');
        $cv = $this->UploadFile($request->file('cv'), '/anggota/' . $anggota->nim, 'cv');
        $ktm = $this->UploadFile($request->file('ktm'), '/anggota/' . $anggota->nim, 'ktm');
        $anggota->update([
            'sertifikat_mapaba' => 'storage/' . $sertifikat_mapaba,
            'foto' => 'storage/' . $foto,
            'cv' => 'storage/' . $cv,
            'ktm' => 'storage/' . $ktm,
        ]);
        return redirect()->back()->with([
            'message' => 'Kamu berhasil melakukan pengajuan KTA.',
            'alert-type' => 'success',
        ]);
    }
}
