<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // harus berurut
        $this->call([
            UserSeeder::class,
            PasienSeeder::class,
            ObatSeeder::class,
            TindakanMedisSeeder::class,
            UnitKerjaSeeder::class,
            PegawaiSeeder::class,
            AdministrasiPasienSeeder::class,
            ObatYangDibutuhkanSeeder::class,
            PegawaiYangMenanganiSeeder::class,
            TindakanYangDilakukanSeeder::class,
        ]);
    }
}
