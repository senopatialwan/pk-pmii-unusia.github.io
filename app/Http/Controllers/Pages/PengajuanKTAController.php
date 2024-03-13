<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Upload;

class PengajuanKTAController extends Controller
{
    use Upload;

    public function index()
    {
        return view("pages.pengajuan-kta");
    }

    public function store(Request $request)
    {
        //
    }
}
