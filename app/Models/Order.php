<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'direction',
        'phone',
        'status',
        'idUser',
        'idProduct',
        'idPayment'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','idUser');
    }
    public function product()
    {
        return $this->belongsTo('App\Product','idProduct');
    }
    public function payment()
    {
        return $this->belongsTo('App\Payment','idPayment');
    }
}
