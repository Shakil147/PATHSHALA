<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	public function contact()
    {
        return $this->hasOne(TeacherContact::class);
    }

    public function academic()
    {
        return $this->hasMany(TeacherAcademic::class);
    }

}
