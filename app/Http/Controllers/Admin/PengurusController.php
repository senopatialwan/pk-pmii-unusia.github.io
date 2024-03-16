<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use App\Http\Requests\PengurusRequest;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penguruses = Pengurus::all();
        return view('admin.pengurus.index', compact('penguruses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PengurusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengurusRequest $request)
    {
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/pengurus', $image->hashName());

        $pengurus = new Pengurus();
        $pengurus->nama_lengkap = $request->nama_lengkap;
        $pengurus->image = $imagePath;
        $pengurus->email = $request->email;
        $pengurus->jabatan = $request->jabatan;
        $pengurus->facebook = $request->facebook;
        $pengurus->instagram = $request->instagram;
        $pengurus->twitter = $request->twitter;
        $pengurus->linkedin = $request->linkedin;
        $pengurus->save();

        return redirect()->route('admin.pengurus.index')->with('success', 'Pengurus berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengurus $pengurus)
    {
        return view('admin.pengurus.edit', compact('pengurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PengurusRequest  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(PengurusRequest $request, Pengurus $pengurus)
    {
        // Tambahkan pernyataan debugging untuk memeriksa data yang dikirimkan dari formulir
        $image = $request->file('image');

        if ($image) {
            $imagePath = $image->storeAs('public/pengurus', $image->hashName());
            $pengurus->image = $imagePath;
        }
    
        $pengurus->nama_lengkap = $request->nama_lengkap;
        $pengurus->email = $request->email;
        $pengurus->jabatan = $request->jabatan;
        $pengurus->facebook = $request->facebook;
        $pengurus->instagram = $request->instagram;
        $pengurus->twitter = $request->twitter;
        $pengurus->linkedin = $request->linkedin;
        $pengurus->save();
    
        return redirect()->route('admin.pengurus.index')->with('success', 'Pengurus berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus)
    {
        $pengurus->delete();

        return redirect()->route('admin.pengurus.index')->with('success', 'Pengurus berhasil dihapus.');
    }
}
