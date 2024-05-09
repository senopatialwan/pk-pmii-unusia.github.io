<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait KtaId
{
    public function GenerateKtaId($kta_id)
    {
        $panjang = 10;
        $kta_id = $kta_id->toArray();

    do {
        $nomor_unik = '';
        // Menghasilkan nomor unik dengan karakter acak dari angka 0 hingga 9
        for ($i = 0; $i < $panjang; $i++) {
            $nomor_unik .= mt_rand(0, 9); // Menggunakan mt_rand() untuk angka acak
        }
    } while ($this->CekKtaId($nomor_unik, $kta_id)); // Melakukan loop sampai nomor unik yang unik ditemukan

    return $nomor_unik;
    }
    public function CekKtaId($kta_request, $kta_id)
    {
        return in_array($kta_request, $kta_id);
    }
}
