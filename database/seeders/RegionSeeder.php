<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;
use Illuminate\Support\Str;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = new Region;

        $region->name = 'Región Metropolitana';
        $region->slug = Str::slug('Región Metropolitana', '-');

        $region->save();

        $region2 = new Region;

        $region2->name = 'Valparaiso';
        $region2->slug = Str::slug('Valparaiso', '-');

        $region2->save();

        $region3 = new Region;

        $region3->name = 'Ohgging';
        $region3->slug = Str::slug('Ohgging', '-');

        $region3->save();


    }
}
