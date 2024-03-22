<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAnggotaRequest;
use App\Models\Anggota;
use App\Models\AngkatanMapaba;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\Rayon;
use App\Traits\Upload;

class AnggotaController extends Controller
{
    use Upload;
    public function index()
    {
        $anggota = Anggota::where('status', 1)->get();
        $data = [
            'anggota' => $anggota
        ];
        return view('admin.anggota.index', $data);
    }

    public function show()
    {
        return view('admin.anggota.show');
    }

    public function create()
    {
        $rayon = Rayon::get();
        $fakultas = Fakultas::get();
        $prodi = ProgramStudi::get();
        $angkatan_mapaba = AngkatanMapaba::get();
        return view('admin.anggota.create', compact('rayon','fakultas','prodi','angkatan_mapaba'));
    }

    public function store(StoreAnggotaRequest $request)
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
            'message' => 'Anggota berhasil ditambahkan.',
            'alert-type' => 'success',
        ]);;
    }

    public function edit()
    {
        return view('admin.anggota.edit');
    }

    public function update($request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->back();
    }

    public function verifikasiKTA()
    {
        $anggota_verifikasi = Anggota::where('status', 0)->get();
        $data = [
            'anggota_verifikasi' => $anggota_verifikasi
        ];
        return view('admin.anggota.verifikasi-kta', $data);
    }

    public function handleVerifikasiKTA(Request $request)
    {
        $anggota = Anggota::find($request->id);
        if($request->status)
        {
            $anggota->update([
                'status'=> $request->status
            ]);
        } else
        {
            $this->destroy($request->id);
        }
        return redirect()->back();
    }
}
