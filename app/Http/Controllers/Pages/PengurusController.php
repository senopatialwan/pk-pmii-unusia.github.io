<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function index()
    {
        // Ambil data pengurus
        $pengurus = Pengurus::all();
        
        // Kirim data pengurus ke view
        return view('pages.tim', ['pengurus' => $pengurus]);
    }
    public function kopri()
    {
        // Ambil semua pengurus dengan kategori Kopri (misalnya category_id 3)
        $kopri_pengurus = Pengurus::where('category_id', 3)->get();

        return view('pages.tim-kopri', compact('kopri_pengurus'));
    }
}
