<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class StudentGuardian extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
