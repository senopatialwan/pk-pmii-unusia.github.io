<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

class CetakKTARequest extends FormRequest
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
            'nama_lengkap' => 'required|exists:anggota,nama_lengkap',
            'email' => 'required|exists:anggota,email',
            'nim' => 'required|integer|exists:anggota,nim',
            'angkatan_mapaba_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus diisi.',
            'integer' => ':attribute harus berupa angka.',
            'exists' => ':attribute belum terdaftar, silakan lakukan pengajuan KTA.',
        ];
    }
}
