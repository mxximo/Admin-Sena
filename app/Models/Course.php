<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teachers()
    {
       return $this->belongsToMany('App\Models\teacher');//metodo de laravel
    }

    public function area()
    {
       return $this->belongsTo('App\Models\area');//metodo de laravel
    }

    public function trainingcenter()
    {
       return $this->belongsTo('App\Models\TrainingCenter');
    }

    public function apprentices()
    {
       return $this->hasMany('App\Models\Apprentices');
    }
}
