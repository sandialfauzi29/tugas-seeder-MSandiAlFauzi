<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('krs')->insert([
            [
                'npm' => '220001',
                'kode_matakuliah' => 'MK001',
            ],
            [
                'npm' => '220002',
                'kode_matakuliah' => 'MK002',
            ]
        ]);
    }
}