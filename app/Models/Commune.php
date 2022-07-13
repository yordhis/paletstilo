<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'idProvince'
    ];

    public function province()
    {
        return $this->belongsTo('App\Province','idProvince');
    }

    public function getRouteKeyName()
    {
            return 'slug';
    }
}
