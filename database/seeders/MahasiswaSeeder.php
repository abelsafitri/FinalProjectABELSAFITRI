<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DB::table('mahasiswas')->insert([
            'npm' => "101010",
            'nama' => 'Mahasiswa10',
            'alamat' => 'Padang',
            'no_hp' => '08122222',
        ]);
            // 'level' => 'admin',]);
    }
}
