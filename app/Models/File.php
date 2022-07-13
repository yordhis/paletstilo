<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'idProduct',
        'idArticle'
    ];
 
    public function producto()
    {
        return $this->belongsTo('App\Product','idProduct');
    }

    public function article()
    {
        return $this->belongsTo('App\Article','idArticle');
    }
}
