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
            ],
            [
                'name' => 'Berita',
            ],
            [
                'name' => 'Akreditasi',
            ],
            [
                'name' => 'Layanan Informasi Publik',
            ],
            [
                'name' => 'Mahasiswa',
            ],
        ]);
    }
}
