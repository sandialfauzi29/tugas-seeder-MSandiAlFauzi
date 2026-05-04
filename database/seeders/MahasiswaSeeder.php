<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'npm' => '220001',
                'nidn' => '1234567890',
                'nama' => 'Sandi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'npm' => '220002',
                'nidn' => '1234567891',
                'nama' => 'Budi',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}