<?php

namespace Database\Seeders;

use App\Models\PegawaiYangMenangani;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PegawaiYangMenanganiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'administrasi_pasien_id' => 1,
                'pegawai_id' => 1,
            ],
            [
                'administrasi_pasien_id' => 2,
                'pegawai_id' => 2,
            ]
        ], fn ($data) => PegawaiYangMenangani::create($data));
    }
}
