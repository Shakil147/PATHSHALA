<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
   public function academic()
    {
        return $this->hasMany('App\TeacherAcademic');
    }
}
