<?php

namespace Database\Seeders;

use App\Models\Measure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medidas = [
            [
                'name' => 'Sillón',
                'largo'=> 124,
                'ancho'=> 84,
                'alto'=> 43
            ],
            [
                'name' => 'Arrimo',
                'largo'=> 110,
                'ancho'=> 40,
                'alto'=> 90
            ],

            [
                'name' => 'Arrimo Doble',
                'largo'=> 80,
                'ancho'=> 40,
                'alto'=> 90
            ],
           
            [
                'name' => 'Librero',
                'largo'=> 100,
                'ancho'=> 40,
                'alto'=> 100
            ],
            
            [
                'name' => 'Rack',
                'largo'=> 120,
                'ancho'=> 46,
                'alto'=> 52
            ],
            
            [
                'name' => 'Ecritorio',
                'largo'=> 125,
                'ancho'=> 61,
                'alto'=> 73
            ],
      
            [
                'name' => 'Banqueta',
                'largo'=> 150,
                'ancho'=> 40,
                'alto'=> 43
            ],

            [
                'name' => 'Taburete',
                'largo'=> 40,
                'ancho'=> 40,
                'alto'=> 40
            ],
            
            [
                'name' => 'Cojín Base',
                'largo'=> 150,
                'ancho'=> 40,
                'alto'=> 13
            ],
            [
                'name' => 'Cojín Base',
                'largo'=> 124,
                'ancho'=> 84,
                'alto'=> 43
            ],
            [
                'name' => 'Cojín Base',
                'largo'=> 120,
                'ancho'=> 80,
                'alto'=> 13
            ],
            [
                'name' => 'Cojín Base',
                'largo'=> 122,
                'ancho'=> 50,
                'alto'=> 13
            ],
            [
                'name' => 'Cojín Base',
                'largo'=> 90,
                'ancho'=> 50,
                'alto'=> 13
            ],
            [
                'name' => 'Cojín Base',
                'largo'=> 120,
                'ancho'=> 50,
                'alto'=> 9
            ],
            [
                'name' => 'Cojín Respaldo',
                'largo'=> 110,
                'ancho'=> 40,
                'alto'=> 9
            ],
            [
                'name' => 'Cojín Respaldo',
                'largo'=> 90,
                'ancho'=> 40,
                'alto'=> 9
            ],

            [
                'name' => 'Cojín Respaldo',
                'largo'=> 50,
                'ancho'=> 40,
                'alto'=> 9
            ],

            [
                'name' => 'Cojín Base',
                'largo'=> 40,
                'ancho'=> 40,
                'alto'=> 9
            ],
            [
                'name' => 'Mesa',
                'largo'=> 90,
                'ancho'=> 70,
                'alto'=> 34
            ],

            [
                'name' => 'Mesa',
                'largo'=> 84,
                'ancho'=> 84,
                'alto'=> 55
            ],

            [
                'name' => 'Mesa',
                'largo'=> 120,
                'ancho'=> 80,
                'alto'=> 39
            ],
            [
                'name' => 'Mesa',
                'largo'=> 80,
                'ancho'=> 50,
                'alto'=> 34
            ]
        ];

        foreach ($medidas as $medida) {
          
            $comuna = new Measure;
    
            $comuna->name = $medida['name'];
            $comuna->slug = Str::slug($medida['name'], '-');
            $comuna->largo = $medida['largo'];
            $comuna->ancho = $medida['ancho'];
            $comuna->alto = $medida['alto'];
    
            $comuna->save();
        }

    }
}
