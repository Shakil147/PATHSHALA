<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentContact;
use App\StudentGuardian;

class Student extends Model
{
    public function contact()
    {
        return $this->hasOne(StudentContact::class);
    }

    public function guardianInfo()
    {
        return $this->hasOne(StudentGuardian::class);
    }
}
