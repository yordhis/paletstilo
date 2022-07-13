<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'largo',
        'ancho',
        'alto'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
