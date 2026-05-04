<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jadwal')->insert([
            [
                'kode_matakuliah' => 'MK001',
                'nidn' => '1234567890',
                'kelas' => 'A',
                'hari' => 'Senin',
                'jam' => now(),
            ],
            [
                'kode_matakuliah' => 'MK002',
                'nidn' => '1234567891',
                'kelas' => 'B',
                'hari' => 'Selasa',
                'jam' => now(),
            ]
        ]);
    }
}