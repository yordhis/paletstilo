<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'available',
        'code',
        'idCategorie'
        // 'img',
        // 'measure',
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie','idCategorie');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
