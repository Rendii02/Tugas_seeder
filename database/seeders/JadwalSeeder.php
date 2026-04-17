<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $matakuliahKodes = DB::table('pwl_kelas_b_matakuliah')->pluck('kode_matakuliah')->toArray();
        $dosenNidns = DB::table('pwl_kelas_b_dosen')->pluck('nidn')->toArray();
        
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        $kelas = ['A', 'B', 'C', 'D'];

        foreach($matakuliahKodes as $kodeMatkuliah){
            $jumlahKelas = $faker->numberBetween(2, 3);
            
            for($k = 0; $k < $jumlahKelas; $k++){
                DB::table('pwl_kelas_b_jadwal')->insert([
                    'kode_matakuliah' => $kodeMatkuliah,
                    'nidn' => $faker->randomElement($dosenNidns),
                    'kelas' => $kelas[$k],
                    'hari' => $faker->randomElement($hari),
                    'jam' => $faker->dateTimeBetween('08:00', '18:00'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
