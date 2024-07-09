<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'id' => 1,
                'kode' => 'OB001',
                'nama' => 'Paracetamol',
                'biaya' => 10000,
            ],
            [
                'id' => 2,
                'kode' => 'OB002',
                'nama' => 'Alendronate',
                'biaya' => 20000,
            ],
            [
                'id' => 3,
                'kode' => 'OB003',
                'nama' => 'Heptaminol',
                'biaya' => 30000,
            ],
        ], fn ($data) => Obat::create($data));
    }
}
