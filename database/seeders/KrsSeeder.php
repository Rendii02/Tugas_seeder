<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KrsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $mahasiswaNpms = DB::table('pwl_kelas_b_mahasiswa')->pluck('npm')->toArray();
        $matakuliahKodes = DB::table('pwl_kelas_b_matakuliah')->pluck('kode_matakuliah')->toArray();

        foreach($mahasiswaNpms as $npm){
            $jumlahMatkuliah = $faker->numberBetween(3, 5);
            $matkuliahTerpilih = $faker->randomElements($matakuliahKodes, $jumlahMatkuliah);
            
            foreach($matkuliahTerpilih as $kodeMatkuliah){
                DB::table('pwl_kelas_b_krs')->insert([
                    'npm' => $npm,
                    'kode_matakuliah' => $kodeMatkuliah,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
