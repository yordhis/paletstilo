<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;
use Illuminate\Support\Str;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincia = new Province;

        $provincia->name = 'Santiago';
        $provincia->slug = Str::slug('Santiago', '-');
        $provincia->idRegion = 1;

        $provincia->save();
       
        $provincia2 = new Province;

        $provincia2->name = 'Talagante';
        $provincia2->slug = Str::slug('Talagante', '-');
        $provincia2->idRegion = 1;

        $provincia2->save();
        
        $provincias3 = new Province;

        $provincias3->name = 'Maipo';
        $provincias3->slug = Str::slug('Maipo', '-');
        $provincias3->idRegion = 1;

        $provincias3->save();
        
        $provincia4 = new Province;

        $provincia4->name = 'Chacabuco';
        $provincia4->slug = Str::slug('Chacabuco', '-');
        $provincia4->idRegion = 1;

        $provincia4->save();
        
        $provincia5 = new Province;

        $provincia5->name = 'Melipilla';
        $provincia5->slug = Str::slug('Melipilla', '-');
        $provincia5->idRegion = 1;

        $provincia5->save();
       
        $provincia06 = new Province;

        $provincia06->name = 'Los Andes';
        $provincia06->slug = Str::slug('Los Andes', '-');
        $provincia06->idRegion = 2;

        $provincia06->save();
        
        $provincia006 = new Province;

        $provincia006->name = 'Marga Marga';
        $provincia006->slug = Str::slug('Marga Marga', '-');
        $provincia006->idRegion = 2;

        $provincia006->save();

        $provincia6 = new Province;

        $provincia6->name = 'Petorca';
        $provincia6->slug = Str::slug('Petorca', '-');
        $provincia6->idRegion = 2;

        $provincia6->save();
       
        $provincia7 = new Province;

        $provincia7->name = 'Quillota';
        $provincia7->slug = Str::slug('Quillota', '-');
        $provincia7->idRegion = 2;

        $provincia7->save();
        
        $provincia8 = new Province;

        $provincia8->name = 'San Antonio';
        $provincia8->slug = Str::slug('San Antonio', '-');
        $provincia8->idRegion = 2;

        $provincia8->save();
       
        $provincia9 = new Province;

        $provincia9->name = 'San Felipe';
        $provincia9->slug = Str::slug('San Felipe', '-');
        $provincia9->idRegion = 2;

        $provincia9->save();
       
        $provincia10 = new Province;

        $provincia10->name = 'Valparaiso';
        $provincia10->slug = Str::slug('Valparaiso', '-');
        $provincia10->idRegion = 2;

        $provincia10->save();
       
        $provincia11 = new Province;

        $provincia11->name = 'Cachapoal';
        $provincia11->slug = Str::slug('Cachapoal', '-');
        $provincia11->idRegion = 3;

        $provincia11->save();
       
        $provincia12 = new Province;

        $provincia12->name = 'Cardenal Caro';
        $provincia12->slug = Str::slug('Cardenal Caro', '-');
        $provincia12->idRegion = 3;

        $provincia12->save();
        
        $provincia13 = new Province;

        $provincia13->name = 'Colchahua';
        $provincia13->slug = Str::slug('Colchahua', '-');
        $provincia13->idRegion = 3;

        $provincia13->save();
    }
}
