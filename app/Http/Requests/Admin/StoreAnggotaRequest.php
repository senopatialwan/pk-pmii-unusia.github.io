<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnggotaRequest extends FormRequest
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
            'nama_lengkap' => 'required|string|unique:anggota,nama_lengkap',
            'email' => 'required|email|unique:anggota,email',
            'nim' => 'required|integer|unique:anggota,nim',
            'alamat' => 'required|string',
            'rayon_id' => 'required',
            'fakultas_id' => 'required',
            'prodi_id' => 'required',
            'angkatan_mapaba_id' => 'required',
            'nomor_telepon' => 'required|integer|unique:anggota,nomor_telepon',
            'sertifikat_mapaba' => 'required|file|mimes:pdf|max:2048',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'ktm' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Kolom :attribute harus diisi.',
            'string' => 'Kolom :attribute harus berupa teks.',
            'email' => 'Kolom :attribute harus berupa alamat email yang valid.',
            'integer' => 'Kolom :attribute harus berupa angka.',
            'unique' => ':attribute sudah terdaftar, silakan gunakan yang lain.',
            'exists' => 'Nilai yang dimasukkan pada kolom :attribute tidak valid.',
            'file' => 'Kolom :attribute harus berupa file.',
            'mimes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
            'max' => 'Ukuran file pada kolom :attribute tidak boleh melebihi :max kilobita.',
            'image' => 'Kolom :attribute harus berupa file gambar.',
        ];
    }
}
