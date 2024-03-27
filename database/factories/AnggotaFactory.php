<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anggota;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Anggota::class;
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'nama_lengkap' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'nim' => $this->faker->numerify('##########'),
            'alamat' => $this->faker->address(),
            'nomor_telepon' => $this->faker->phoneNumber(),
            'rayon_id' => rand(1, 6),
            'fakultas_id' => rand(1, 6),
            'prodi_id' => rand(1, 14),
            'angkatan_mapaba_id' => rand(1, 14),
            'kta_id' => null,
            'sertifikat_mapaba' => null,
            'foto' => null,
            'cv' => null,
            'ktm' => null,
            'status' => rand(0, 2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
