<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'id' => 1,
                'unit_kerja_id' => 1,
                'kode' => 'PGW001',
                'nama' => 'Dr. Zakir Naik',
            ],
            [
                'id' => 2,
                'unit_kerja_id' => 2,
                'kode' => 'PGW002',
                'nama' => 'Dr. Umar',
            ]
        ], fn ($data) => Pegawai::create($data));
    }
}
