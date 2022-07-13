<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use Illuminate\Support\Str;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [     
            'Terrazas', //1
            'Mesas  deco', //2
            'Complemento hogar', //3
            'Protector de muebles', //4
            'Combos Premiums' //5
        ];

        foreach ($categorias as $categoria) {
            $catego = new Categorie;
    
            $catego->name = $categoria;
            $catego->slug = Str::slug($categoria, '-');
    
            $catego->save();
        }

    }
}
