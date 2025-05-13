<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function area()
    {
       return $this->belongsTo('App\Models\area');//metodo de laravel
    }

    public function trainingcenter()
    {
       return $this->belongsTo('App\Models\TrainingCenter');
    }

    public function courses()
    {
       return $this->belongsToMany('App\Models\Course');//metodo de laravel
    }
}
