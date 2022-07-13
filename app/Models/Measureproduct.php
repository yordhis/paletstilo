<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measureproduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'idProduct',
        'idMeasure'
    ];

    public function producto()
    {
        return $this->belongsTo('App\Product','idProduct');
    }

    public function measure()
    {
        return $this->belongsTo('App\Measure','idMeasure');
    }
}
