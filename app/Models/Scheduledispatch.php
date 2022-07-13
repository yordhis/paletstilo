<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduledispatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'hour',
        'minute',
        'idUser',
        'idOrder'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser');
    }
    public function order()
    {
        return $this->belongsTo('App\Order','idOrder');
    }
}
