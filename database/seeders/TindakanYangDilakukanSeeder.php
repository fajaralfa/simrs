<?php

namespace Database\Seeders;

use App\Models\TindakanYangDilakukan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class TindakanYangDilakukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'administrasi_pasien_id' => 1,
                'tindakan_medis_id' => 1,
            ],
            [
                'administrasi_pasien_id' => 2,
                'tindakan_medis_id' => 2,
            ],
        ], fn ($data) => TindakanYangDilakukan::create($data));
    }
}
