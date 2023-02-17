<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_labs')->insert([
            [
                'name' => 'Mesin',
            ],
            [
                'name' => 'Sipil',
            ],
            [
                'name' => 'Pertambangan',
            ],
            [
                'name' => 'Elektro',
            ],
            [
                'name' => 'Kimia',
            ],
            [
                'name' => 'Geologi',
            ],
            [
                'name' => 'Arsitektur',
            ],
        ]);
    }
}
