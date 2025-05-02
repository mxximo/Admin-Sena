<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    public function curse()
    {
       return $this->belongsTo('App\Models\Curse');//metodo de laravel
    }

    public function computer()
    {
       return $this->belongsTo('App\Models\Computer');//metodo de laravel
    }
}
