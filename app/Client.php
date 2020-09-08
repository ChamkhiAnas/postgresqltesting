<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  

    public function Ads()
    {
        return $this->hasMany('App\Ad');
    }
}
