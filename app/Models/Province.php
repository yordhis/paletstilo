<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'idRegion'
    ];

    public function region(){
        return $this->belongsTo('App\Region', 'idRegion'); 
    }


    public function getRouteKeyName()
    {
            return 'slug';
    }
}
