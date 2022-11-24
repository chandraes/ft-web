<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_dosens')->insert([
            [
                'jurusan_prodi' => 'Jurusan Teknik Pertambangan & Prodi Geologi',
            ],
            [
                'jurusan_prodi' => 'Jurusan Teknik Kimia',
            ],
            [
                'jurusan_prodi' => 'Jurusan Teknik Elektro',
            ],
            [
                'jurusan_prodi' => 'Jurusan Teknik Mesin',
            ],
            [
                'jurusan_prodi' => 'Program Doktor Ilmu Teknik',
            ],
        ]);
    }
}
