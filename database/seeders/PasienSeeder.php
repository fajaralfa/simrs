<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'id' => 5,
                'kode' => 'PS2',
                'nama' => 'Fajar',
            ],
            [
                'id' => 6,
                'kode' => 'PS3',
                'nama' => 'Ilham',
            ],
            [
                'id' => 7,
                'kode' => 'PS4',
                'nama' => 'Alfarizi',
            ]
        ], fn ($data) => Pasien::create($data));
    }
}
