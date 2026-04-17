<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $matkuliah = [
            'Algoritma dan Pemrograman',
            'Struktur Data',
            'Database Management System',
            'Pemrograman Web',
            'Pemrograman Mobile',
            'Sistem Operasi',
            'Jaringan Komputer',
            'Keamanan Informasi',
            'Machine Learning',
            'Cloud Computing',
            'Software Engineering',
            'UI/UX Design'
        ];

        foreach($matkuliah as $index => $nama){
            DB::table('pwl_kelas_b_matakuliah')->insert([
                'kode_matakuliah' => 'MK' . sprintf('%06d', $index + 1),
                'nama_matakuliah' => $nama,
                'sks' => $faker->numberBetween(2, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
