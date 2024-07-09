<?php

namespace Database\Seeders;

use App\Models\TindakanMedis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class TindakanMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'id' => 1,
                'kode' => 'TM001',
                'tindakan_medis' => 'rontgen',
                'biaya' => 5000,
            ],
            [
                'id' => 2,
                'kode' => 'TBGG004',
                'tindakan_medis' => 'tambal gigi (per satu)',
                'biaya' => 150000,
            ]
        ], fn ($data) => TindakanMedis::create($data));
    }
}
