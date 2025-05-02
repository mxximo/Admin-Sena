<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function area()
    {
       return $this->belongsTo('App\Models\area');//metodo de laravel
    }

    public function tradingcenter()
    {
       return $this->belongsTo('App\Models\Tradingcenter');
    }

    public function curses()
    {
       return $this->belongsToMany('App\Models\Curse');//metodo de laravel
    }
}
