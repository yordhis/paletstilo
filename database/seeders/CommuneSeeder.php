<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commune;
use Illuminate\Support\Str;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $comunasSantiagos = [
                'Cerrilos',
                'Cerro Navia',
                'Conchali',
                'El Bosque',
                'Estacion Central',
                'Huechuraba' ,
                'Independencia',
                'La Cisterna',
                'La Florida',
                'La  Granja',
                'La Pintana',
                'La Reina',
                'Las Condes',
                'Lo Barnechea',
                'Lo Espejo',
                'Lo Prado',
                'Macul',
                'Maipu',
                'Ñuñoa',
                'P.A.C',
                'Peñalolen',
                'Providencia',
                'Pudahuel',
                'Quilicura',
                'Quinta Normal',
                'Recoleta',
                'Renca',
                'San Joaquin',
                'San Miguel',
                'San Ramon',
                'Santiago',
                'Vitacura'

        ];  

        foreach ($comunasSantiagos as $comunasSantiago) {
          
            $comuna = new Commune;
    
            $comuna->name = $comunasSantiago;
            $comuna->slug = Str::slug($comunasSantiago, '-');
            $comuna->idProvince = 1;
    
            $comuna->save();
        }

        $comunasCordilleras = [     
            'Puente Alto',
            'San Jose del Maipo',
            'Pirque'

        ];

        foreach ($comunasCordilleras as $comunasCordillera) {
            $comuna2 = new Commune;
    
            $comuna2->name = $comunasCordillera;
            $comuna2->slug = Str::slug($comunasCordillera, '-');
            $comuna2->idProvince = 2;
    
            $comuna2->save();
        }
       
        $comunasTalagantes = [     
            'Talagante',
            'El Monte',
            'Isla de Maipo',
            'Peñaflor',
            'Padre Hurtado'
        ];

        foreach ($comunasTalagantes as $comunasTalagante) {
            $comuna3 = new Commune;
    
            $comuna3->name = $comunasTalagante;
            $comuna3->slug = Str::slug($comunasTalagante, '-');
            $comuna3->idProvince = 3;
    
            $comuna3->save();
        }
       
        $comunasMaipaos= [     
            'San Bernardo',
            'Calera de Tango',
            'Buin', 
            'Paine'

        ];

        foreach ($comunasMaipaos as $comunasMaipao) {
            $comuna4 = new Commune;
    
            $comuna4->name = $comunasMaipao;
            $comuna4->slug = Str::slug($comunasMaipao, '-');
            $comuna4->idProvince = 4;
    
            $comuna4->save();
        }


        $comunasChacabucos = [     
            'Colina', 
            'Lampa',
            'Til-Til' 
        ];

        foreach ($comunasChacabucos as $comunasChacabuco) {
            $comuna5 = new Commune;
    
            $comuna5->name = $comunasChacabuco;
            $comuna5->slug = Str::slug($comunasChacabuco, '-');
            $comuna5->idProvince = 5;
    
            $comuna5->save();
        }


        $comunasMelipillas = [     
            'Alhue',
            'Curacavi',
            'Maria Pinto',
            'Melipilla',
            'San Pedro'

        ];

        foreach ($comunasMelipillas as $comunasMelipilla) {
            $comuna6 = new Commune;
    
            $comuna6->name = $comunasMelipilla;
            $comuna6->slug = Str::slug($comunasMelipilla, '-');
            $comuna6->idProvince = 6;
    
            $comuna6->save();
        }








    }
}


