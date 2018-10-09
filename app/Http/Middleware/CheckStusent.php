<?php

namespace App\Http\Middleware;

use App\Student;
use Session;
use Closure;

class CheckStusent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $studentId = Session::get('studentId');
        if ($studentId) {
            $token_key = Session::get('student_token_key');
            if ($token_key) {
                $student = Student::where('id',$studentId)->first();
                if ($token_key == $student->token_key) {
                    return $next($request);
                }
            }
        }else{        
            return redirect('/');            
        }

    }
}
