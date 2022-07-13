<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'eslogan',
        'image',
        'status'
    ];

    // esta bariable lo que hace es
    // protejer los campos espesificados 
    // e imnorar los demas campos
    // protected $guarded = [
    //     'status',
    // ];

     public function getRouteKeyName()
    {
    //    return $this->getKeyName();
            return 'slug';
    }
}
