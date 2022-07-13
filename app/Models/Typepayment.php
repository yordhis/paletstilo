<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'titular',
        'accountNumber',
        'idCard',
        'email'
    ];

    
    public function getRouteKeyName()
    {
            return 'slug';
    }
}
