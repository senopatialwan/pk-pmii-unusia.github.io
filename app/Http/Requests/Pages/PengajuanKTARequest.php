<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanKTARequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_lengkap' => 'required|string',
            'email' => 'required|email',
            'nim' => 'required|integer|unique:anggota,nim',
            'rayon' => 'required|string',
            'fakultas' => 'required|string',
            'prodi' => 'required|string',
            'alamat' => 'required|string',
            'angkatan_mapaba' => 'required|integer',
            'nomor_telepon' => 'required|integer',
            'sertifikat_mapaba' => 'required|file|mimes:pdf',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'ktm' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Nama lengkap harus diisi.',
            'nama_lengkap.string' => 'Nama lengkap harus berupa teks.',
    
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
    
            'nim.required' => 'NIM harus diisi.',
            'nim.integer' => 'NIM harus berupa angka.',
            'nim.unique' => 'NIM harus unik, NIM ini sudah terdaftar.',
    
            'rayon.required' => 'Rayon harus diisi.',
            'rayon.string' => 'Rayon harus berupa teks.',
    
            'fakultas.required' => 'Fakultas harus diisi.',
            'fakultas.string' => 'Fakultas harus berupa teks.',
    
            'prodi.required' => 'Program studi harus diisi.',
            'prodi.string' => 'Program studi harus berupa teks.',
    
            'alamat.required' => 'Alamat harus diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
    
            'angkatan_mapaba.required' => 'Angkatan Mapaba harus diisi.',
            'angkatan_mapaba.integer' => 'Angkatan Mapaba harus berupa angka.',
    
            'nomor_telepon.required' => 'Nomor telepon harus diisi.',
            'nomor_telepon.integer' => 'Nomor telepon harus berupa angka.',
    
            'sertifikat_mapaba.required' => 'Sertifikat Mapaba harus diunggah.',
            'sertifikat_mapaba.mimes' => 'Sertifikat Mapaba harus berformat PDF.',
    
            'foto.required' => 'Foto harus diunggah.',
            'foto.image' => 'Foto harus berupa file gambar.',
            'foto.mimes' => 'Foto harus berformat JPEG, PNG, atau JPG.',
            'foto.max' => 'Ukuran foto tidak boleh lebih dari 2 MB.',
    
            'cv.required' => 'CV harus diunggah.',
            'cv.mimes' => 'CV harus berformat PDF, DOC, atau DOCX.',
            'cv.max' => 'Ukuran CV tidak boleh lebih dari 2 MB.',
    
            'ktm.required' => 'KTM harus diunggah.',
            'ktm.image' => 'KTM harus berupa file gambar.',
            'ktm.mimes' => 'KTM harus berformat JPEG, PNG, atau JPG.',
            'ktm.max' => 'Ukuran KTM tidak boleh lebih dari 2 MB.',
        ];
    }
}
