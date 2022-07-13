<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippingvalue extends Model
{
    use HasFactory;

    protected $fillable = [
        'kmValue',
        'kmDiference',
        'price',
        'idCommune'
    ];

    public function commune()
    {
        return $this->belongsTo('App\Commune','idCommune');
    }


  
}
