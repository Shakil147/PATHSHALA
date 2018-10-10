<?php

namespace App\Http\Middleware;
use Closure;
use App\Teacher;
use App\TeacherLogInfo;
use Session;

class CheckTeacher
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
        //return $next($request);
        $teacherId = Session::get('teacherId');
        if (isset($teacherId)) {
            $token_id = Session::get('teacher_token_id');
            if (isset($token_id)) {
                $token_key = Session::get('teacher_token_key');
                if (isset($token_key)) {
                    $teacher = Teacher::where('id',$teacherId)->first();
                    if (isset($teacher)) {
                        $token = TeacherLogInfo::where('id',$token_id)
                        ->where('teacher_id',$teacherId)
                        ->first();
                        if (isset($token)) {
                            if ($token->token_key == $token_key) {
                                return $next($request);
                            }
                        }
                    }
                }
            }
        }
        else{        
            return redirect('/');            
        }

    }
}
