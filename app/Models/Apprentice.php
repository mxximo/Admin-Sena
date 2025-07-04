<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    protected $fillable=[
        'name','email','cell_number','course_id','computer_id'
    ];

    public function computer(){
        return $this->belongsTo(Computer::class);
    }
    public function course()  {
        return $this->belongsTo(Course::class);
    }
}
