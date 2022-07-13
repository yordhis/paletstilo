<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'direction',
        'email',
        'idRegion',
        'idProvince',
        'idCommune',
        'idUser'
    ];

    public function region()
    {
        return $this->belongsTo('App\Region','idRegion');
    }
    public function province()
    {
        return $this->belongsTo('App\Province','idProvince');
    }
    public function commune()
    {
        return $this->belongsTo('App\Commune','idCommune');
    }
    public function user()
    {
        return $this->belongsTo('App\User','idUser');
    }
}
