<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arr::map([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => 'rahasia',
                'role' => 'admin',
            ],
            [
                'id' => 2,
                'name' => 'Operator',
                'email' => 'operator@email.com',
                'password' => 'rahasia',
                'role' => 'operator',
            ],

        ], fn ($data) => User::create($data));
    }
}
