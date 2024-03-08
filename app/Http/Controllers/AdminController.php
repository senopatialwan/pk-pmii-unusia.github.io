<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function showDatabaseIndex()
    {
        return view('admin.database.index');
    }

    public function showVerifikasiKta()
    {
        return view('admin.database.verivikasi-kta');
    }

    public function showCreateAnggota()
    {
        return view('admin.database.create');
    }

    public function showEditAnggota()
    {
        return view('admin.database.edit');
    }

    public function showDetailAnggota()
    {
        return view('admin.database.show');
    }

    public function showStrukturOrganisasiIndex()
    {
        return view('admin.struktur-organisasi.index');
    }

    public function showCreatePengurus()
    {
        return view('admin.struktur-organisasi.create');
    }

    public function showEditPengurus()
    {
        return view('admin.struktur-organisasi.edit');
    }
}
