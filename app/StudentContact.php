<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class StudentContact extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
