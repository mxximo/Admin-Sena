<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    //
    public function apprentice()  {
        return $this-> hasOne(Apprentice::class);
    }

    protected $fillable=[
        'number','brand','urlImage'
    ];
}
