<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayudador extends Model
{
    use HasFactory;

  static function getMedidas($medidas, $producto){
    $medida = explode('x',$medidas);
        $producto['largo'] = $medida[0];
        $producto['ancho'] = $medida[1];
        $producto['alto'] = $medida[2];

    return $producto;
  }


}
