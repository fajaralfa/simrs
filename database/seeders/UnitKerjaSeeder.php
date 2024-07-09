<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [ 'id' => 1, 'nama' => 'Dokter Spesialis Gigi' ],
            [ 'id' => 2, 'nama' => 'Dokter Umum' ],
        ], fn ($data) => UnitKerja::create($data));
    }
}
