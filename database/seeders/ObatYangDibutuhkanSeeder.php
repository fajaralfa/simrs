<?php

namespace Database\Seeders;

use App\Models\ObatYangDibutuhkan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ObatYangDibutuhkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'administrasi_pasien_id' => 1,
                'obat_id' => 2,
            ],
            [
                'administrasi_pasien_id' => 2,
                'obat_id' => 1,
            ],
            [
                'administrasi_pasien_id' => 2,
                'obat_id' => 2,
            ]
        ], fn ($data) => ObatYangDibutuhkan::create($data));
    }
}
