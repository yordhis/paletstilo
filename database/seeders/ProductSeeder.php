<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                "name"=>"Sillón Puf Paletstilo",
                "code"=>"001",
                "price"=> 75137,
                "idCategorie"=>1
            ],
            [
                "name"=>"Sillón Premium Paletstilo",
                "code"=>"002",
                "price"=> 119460,
                "idCategorie"=>1
            ],
            [
                "name"=>"Mesa de centro Paletstilo",
                "code"=>"003",
                "price"=> 65450,
                "idCategorie"=>2
            ],
            [
                "name"=>"Mesa de Centro Cubo Premium",
                "code"=>"004",
                "price"=> 54450,
                "idCategorie"=>2
            ],
            [
                "name"=>"Mesa de Centro doble",
                "code"=>"005",
                "price"=> 95590,
                "idCategorie"=>2
            ],
            [
                "name"=>"Mesa de Centro Mini",
                "code"=>"006",
                "price"=> 65720,
                "idCategorie"=>2
            ],
            [
                "name"=>"Banqueta + cojín de alta densidad",
                "code"=>"007",
                "price"=> 109730,
                "idCategorie"=>1
            ],
            [
                "name"=>"Banqueta XL + cojín de alta densidad",
                "code"=>"008",
                "price"=> 148360,
                "idCategorie"=>1
            ],
            [
                "name"=>"Sillón Premium + Banqueta + Mesa centro mini",
                "code"=>"009",
                "price"=> 289012,
                "idCategorie"=>5
            ],
            [
                "name"=>"Sillón Premium + Banqueta XL + Mesa de Centro Mini",
                "code"=>"010",
                "price"=> 326869,
                "idCategorie"=>5
            ],
            [
                "name"=>"Sillón Premium + Mesa de Centro",
                "code"=>"011",
                "price"=> 181212,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + Mesa de Centro",
                "code"=>"012",
                "price"=> 298283,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + 1 Sillón L + 1 Banqueta + Mesa de Centro",
                "code"=>"013",
                "price"=> 513532,
                "idCategorie"=>5
            ],
            [
                "name"=>"3 Sillones Premium + Mesa de Centro",
                "code"=>"014",
                "price"=> 402639,
                "idCategorie"=>5
            ],
            [
                "name"=>"4 Sillones Premium + 2 Mesas de Centro",
                "code"=>"015",
                "price"=> 560041,
                "idCategorie"=>5
            ],
            [
                "name"=>"Sillón L Derecho Premium",
                "code"=>"016",
                "price"=> 126460,
                "idCategorie"=>1
            ],
            [
                "name"=>"Sillón L Izquierdo Premium",
                "code"=>"017",
                "price"=> 126460,
                "idCategorie"=>1
            ],
            [
                "name"=>"1 Sillón Premium +1 Sillón L + Mesa de Centro Mini",
                "code"=>"018",
                "price"=> 298915,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + 1 Sillón L + Mesa de Centro",
                "code"=>"019",
                "price"=> 397225,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + Mesa Taburete",
                "code"=>"021",
                "price"=> 386390,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + 1 Sillón L + Mesa de Centro + Puf",
                "code"=>"022",
                "price"=> 471975,
                "idCategorie"=>5
            ],
            [
                "name"=>"Mesa Taburete Paletstilo",
                "code"=>"023",
                "price"=> 158663,
                "idCategorie"=>2
            ],
            [
                "name"=>"2 Sillones Premium + 1 Sillón L + Mesa Taburete",
                "code"=>"024",
                "price"=> 478700,
                "idCategorie"=>5
            ],
            [
                "name"=>"1 Sillon Premium + 1 Sillon L + Mesa Taburete",
                "code"=>"025",
                "price"=> 393110,
                "idCategorie"=>5
            ],
            [
                "name"=>"3 Silones Premium + 2 Sillónes L + Mesa de Centro",
                "code"=>"026",
                "price"=> 609075,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + 1 Puf+ Mesa de Centro",
                "code"=>"027",
                "price"=> 358178,
                "idCategorie"=>5
            ],
            [
                "name"=>"1 Sillón Premium + 1 Sillón L Premium",
                "code"=>"028",
                "price"=> 241002,
                "idCategorie"=>5
            ],
            [
                "name"=>"3 Sillones Premium + 2 Sillón L + Mesa Taburete",
                "code"=>"029",
                "price"=> 697738,
                "idCategorie"=>5
            ],
            [
                "name"=>"1 Sillón Premium + 1 Puf + Mesa Centro",
                "code"=>"030",
                "price"=> 256348,
                "idCategorie"=>5
            ],
            [
                "name"=>"Sillón Clásico",
                "code"=>"031",
                "price"=> 97350,
                "idCategorie"=>1
            ],
            [
                "name"=>"3 Sillónes Clásico + Mesa de Centro",
                "code"=>"032",
                "price"=> 350350,
                "idCategorie"=>5
            ],
            [
                "name"=>"Arrimo Clásico",
                "code"=>"033",
                "price"=> 74274,
                "idCategorie"=>3
            ],
            [
                "name"=>"Arrimo doble Premium",
                "code"=>"034",
                "price"=> 77518,
                "idCategorie"=>3
            ],
            [
                "name"=>"Mesa Paletstilo",
                "code"=>"035",
                "price"=> 94940,
                "idCategorie"=>2
            ],
            [
                "name"=>"Librero Paletstilo",
                "code"=>"036",
                "price"=> 64357,
                "idCategorie"=>3
            ],
            [
                "name"=>"Rack tv Paletstilo",
                "code"=>"037",
                "price"=> 75205,
                "idCategorie"=>3
            ],
            [
                "name"=>"Sillón kubo Paletstilo",
                "code"=>"038",
                "price"=> 125685,
                "idCategorie"=>1
            ],
            [
                "name"=>"Piso Bar Paletstilo",
                "code"=>"039",
                "price"=> 81360,
                "idCategorie"=>3
            ],
            [
                "name"=>"Kubo móvil Paletstilo",
                "code"=>"040",
                "price"=> 74910,
                "idCategorie"=>3
            ],
            [
                "name"=>"Apoya Pies Paletstilo",
                "code"=>"041",
                "price"=> 24816,
                "idCategorie"=>3
            ],
            [
                "name"=>"Escritorio Euro Paletstilo",
                "code"=>"042",
                "price"=> 89760,
                "idCategorie"=>3
            ],
            [
                "name"=>"Mini Taburete Paletstilo",
                "code"=>"043",
                "price"=> 40838,
                "idCategorie"=>2
            ],
            [
                "name"=>"Sillón Yugo Paletstilo",
                "code"=>"044",
                "price"=> 75141,
                "idCategorie"=>1
            ],
            [
                "name"=>"Sillón + Mesa centro Mini + 2 mini Taburetes",
                "code"=>"045",
                "price"=> 262326,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Banquetas + cojín de alta densidad",
                "code"=>"046",
                "price"=> 217265,
                "idCategorie"=>5
            ],
            [
                "name"=>"1 Sillón Premium + Mesa Taburete",
                "code"=>"047",
                "price"=> 272560,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium + 1 Sillón L",
                "code"=>"048",
                "price"=> 358072,
                "idCategorie"=>5
            ],
            [
                "name"=>"Estante Multiuso Paletstilo",
                "code"=>"049",
                "price"=> 69670,
                "idCategorie"=>3
            ],
            [
                "name"=>"Sillón Premium Gold",
                "code"=>"050",
                "price"=> 164540,
                "idCategorie"=>1
            ],
            [
                "name"=>"Sillón L Izquierdo Premium Gold",
                "code"=>"051",
                "price"=> 174328,
                "idCategorie"=>1
            ],
            [
                "name"=>"Sillón Derecho Premium Gold",
                "code"=>"052",
                "price"=> 174328,
                "idCategorie"=>1
            ],
            [
                "name"=>"1 Sillón Premium Gold + 1 Sillón Izquierdo Premium Gold + mesa centro",
                "code"=>"053",
                "price"=> 384102,
                "idCategorie"=>5
            ],
            [
                "name"=>"2 Sillones Premium Gold + 1 Sillón Izquierdo Premium Gold + mesa centro",
                "code"=>"054",
                "price"=> 540415,
                "idCategorie"=>5
            ],
            [
                "name"=>"3 Sillones Premium Gold + 1 Sillón Izquierdo Premium Gold + mesa centro",
                "code"=>"055",
                "price"=> 682060,
                "idCategorie"=>5
            ],
            [
                "name"=>"3 Sillones Premium Gold + 2 Sillones L Izquierdo Premium Gold + mesa centro",
                "code"=>"056",
                "price"=> 844185,
                "idCategorie"=>5
            ],
            [
                "name"=>"3 Sillones Premium Gold + 2 Sillones L Derecho Premium Gold + mesa centro",
                "code"=>"057",
                "price"=> 997207,
                "idCategorie"=>5
            ],
            [
                "name"=>"Reposera Paletstilo",
                "code"=>"058",
                "price"=> 135620,
                "idCategorie"=>3
            ],
            [
                "name"=>"Fundas protectoras",
                "code"=>"000",
                "price"=> 18900,
                "idCategorie"=>4
            ],
        ];



        foreach ($productos as $producto) {
            $product = new Product;
    
            $product->name = $producto["name"];
            $product->code = $producto["code"];
            $product->slug = Str::slug($producto["name"], '-');
            $product->price = $producto["price"];
            $product->idCategorie = $producto["idCategorie"];
    
            $product->save();
        }
    }
}
