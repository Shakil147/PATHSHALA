<?php

namespace App\Http\Middleware;

use Closure;
use App\Student;
use App\StudentLogInfo;
use Session;

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
        if (isset($studentId)) {
            $token_id = Session::get('student_token_id');
            if (isset($token_id)) {
                $token_key = Session::get('student_token_key');
                if (isset($token_key)) {
                    $student = Student::where('id',$studentId)->first();
                    if (isset($student)) {
                        $token = StudentLogInfo::where('id',$token_id)
                        ->where('student_id',$studentId)
                        ->first();
                        if (isset($token)) {
                            if ($token_key == $token->token_key) {
                                return $next($request);
                            }
                        }
                    }
                }
            }
        }else{        
            return redirect('/');            
        }

    }
}
