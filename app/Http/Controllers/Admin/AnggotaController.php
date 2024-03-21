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

class AnggotaController extends Controller
{
    public function index()
    {
        return view('admin.anggota.index');
    }

    public function show()
    {
        return view('admin.anggota.show');
    }

    public function create()
    {
        $rayon = Rayon::all();
        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        $angkatan_mapaba = AngkatanMapaba::all();
        return view('admin.anggota.create', compact('rayon','fakultas','prodi','angkatan_mapaba'));
    }

    public function store(StoreAnggotaRequest $request)
    {
        //
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
