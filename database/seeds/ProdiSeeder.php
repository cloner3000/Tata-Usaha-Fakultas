<?php

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program_studi')->insert([
            'kode_prodi' => '401',
            'program_studi' => 'Bimbingan Konseling Islam'
        ]);
        DB::table('program_studi')->insert([
            'kode_prodi' => '402',
            'program_studi' => 'Komunikasi dan Penyiaran Islam'
        ]);
        DB::table('program_studi')->insert([
            'kode_prodi' => '403',
            'program_studi' => 'Manajemen Dakwah'
        ]);
        DB::table('program_studi')->insert([
            'kode_prodi' => '404',
            'program_studi' => 'Pengembangan Masyarakat Islam'
        ]);
        DB::table('program_studi')->insert([
            'kode_prodi' => '405',
            'program_studi' => 'Ilmu Komunikasi Jurnalistik'
        ]);
        DB::table('program_studi')->insert([
            'kode_prodi' => '406',
            'program_studi' => 'Ilmu Komunikasi Humas'
        ]);
    }
}
