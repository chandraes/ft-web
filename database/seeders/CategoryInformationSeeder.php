<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_information')->insert([
            [
                'name' => 'Pengumuman',
                'slug' => 'pengumuman',
            ],
            [
                'name' => 'Berita',
                'slug' => 'berita',
            ],
            [
                'name' => 'Akreditasi',
                'slug' => 'akreditasi',
            ],
            [
                'name' => 'Layanan Informasi Publik',
                'slug' => 'layanan-informasi-publik',
            ],
            [
                'name' => 'Mahasiswa',
                'slug' => 'mahasiswa',
            ],
            [
                'name' => 'Informasi Beasiswa',
                'slug' => 'informasi-beasiswa',
            ],
        ]);
    }
}
