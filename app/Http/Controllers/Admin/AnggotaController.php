<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
        return view('admin.anggota.create');
    }

    public function store($request)
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
        //
    }

    public function verifikasiKTA()
    {
        return view('admin.anggota.verifikasi-kta');
    }

    public function handleVerifikasiKTA($request)
    {
        //
    }
}