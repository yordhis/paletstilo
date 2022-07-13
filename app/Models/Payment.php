<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'pay',
        'refferencePay',
        'date',
        'status',
        'idUser',
        'idProduct',
        'idTypepayment',
        'idShipping'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser');
    }
    public function product()
    {
        return $this->belongsTo('App\Product','idProduct');
    }
    public function typepayment()
    {
        return $this->belongsTo('App\Typepayment','idTypepayment');
    }
    public function shipping()
    {
        return $this->belongsTo('App\Shipping','idShipping');
    }
}
