<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
     protected $table = 'am1313_questions';
     protected $fillable = [];

     public function answers()
    {
        return $this->hasMany(Answers::class,'question_id', 'id');
    }
}
