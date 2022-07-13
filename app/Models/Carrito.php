<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'idUser',
        'idProduct'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser');
    }

    public function producto()
    {
        return $this->belongsTo('App\Product','idProduct');
    }
}
