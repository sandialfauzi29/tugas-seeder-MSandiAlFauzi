<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dosen')->insert([
            [
                'nidn' => '1234567890',
                'nama' => 'Dosen A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nidn' => '1234567891',
                'nama' => 'Dosen B',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}