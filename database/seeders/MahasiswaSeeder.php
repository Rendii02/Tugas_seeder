<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $dosenNidns = DB::table('pwl_kelas_b_dosen')->pluck('nidn')->toArray();

        for($i = 1; $i <= 20; $i++){
            $tahun = sprintf('%02d', $faker->numberBetween(21, 23));
            $nomor = sprintf('%08d', $i);
            
            DB::table('pwl_kelas_b_mahasiswa')->insert([
                'npm' => $tahun . $nomor,
                'nidn' => $faker->randomElement($dosenNidns),
                'nama' => $faker->name(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
