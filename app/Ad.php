<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    
    protected $casts = [
        'annoncedetail' => 'array'
    ];
    public function Client()
    {
        return $this->belongsTo('App\Client');
    }
}
