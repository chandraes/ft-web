<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryPimpinanSeeder::class,
            CategoryInformationSeeder::class,
            CategoryDosenSeeder::class,
            CategoryLabSeeder::class,
            MataKuliahSeeder::class,
        ]);
    }
}
