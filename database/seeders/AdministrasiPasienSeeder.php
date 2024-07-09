<?php

namespace Database\Seeders;

use App\Models\AdministrasiPasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class AdministrasiPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'id' => 1,
                'pasien_id' => 5,
                'user_id' => 1,
                'total_biaya' => 120000,
                'bayar' => 200000,
                'status_pembayaran' => 'sudah',
            ],
            [
                'id' => 2,
                'pasien_id' => 6,
                'user_id' => 2,
                'total_biaya' => 90000,
                'bayar' => 100000,
                'status_pembayaran' => 'sudah',
            ]
        ], fn ($data) => AdministrasiPasien::create($data));
    }
}
