<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPimpinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_pimpinans')->insert([
            [
                'name' => 'Dekan',
                'order' => 1,
            ],
            [
                'name' => 'Wakil Dekan',
                'order' => 2,
            ],
            [
                'name' => 'Pimpinan Juruasan & Program Studi',
                'order' => 3,
            ],
        ]);
    }
}
