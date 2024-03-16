<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengurusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Atur sesuai kebutuhan autentikasi Anda
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return [
                'nama_lengkap' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'email' => 'required|email|unique:pengurus,email',
                'jabatan' => 'required|string|max:255',
                'facebook' => 'nullable|url',
                'instagram' => 'nullable|url',
                'twitter' => 'nullable|url',
                'linkedin' => 'nullable|url',
            ];
        } elseif ($this->isMethod('PUT')) {
            return [
                'nama_lengkap' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'email' => 'required|email|unique:pengurus,email,' . $this->pengurus->id,
                'jabatan' => 'required|string|max:255',
                'facebook' => 'nullable|url',
                'instagram' => 'nullable|url',
                'twitter' => 'nullable|url',
                'linkedin' => 'nullable|url',
            ];
        }

        return [];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Nama lengkap harus diisi.',
            'image.required' => 'Foto profil harus diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Format gambar yang diizinkan adalah: jpeg, png, jpg, gif.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan.',
            'jabatan.required' => 'Jabatan harus diisi.',
            'facebook.url' => 'Link Facebook harus berupa URL yang valid.',
            'instagram.url' => 'Link Instagram harus berupa URL yang valid.',
            'twitter.url' => 'Link Twitter harus berupa URL yang valid.',
            'linkedin.url' => 'Link LinkedIn harus berupa URL yang valid.',
        ];
    }
}
