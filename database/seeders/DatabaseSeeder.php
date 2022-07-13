<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\{RegionSeeder, ProvinceSeeder, CommuneSeeder, CategorieSeeder, UserSeeder, MeasureSeeder, ProductSeeder};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MeasureSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(CommuneSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
