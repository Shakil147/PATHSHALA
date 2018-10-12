<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class TeacherContact extends Model
{
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
