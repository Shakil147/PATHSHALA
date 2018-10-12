<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;

class TeacherAcademic extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
