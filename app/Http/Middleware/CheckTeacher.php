<?php

namespace App\Http\Middleware;
use App\Teacher;

use Session;
use Closure;

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
        $teacherId = Session::get('teacherId');
        if ($teacherId) {
            $token_key = Session::get('token_key');
            if ($token_key) {
                $teacher = Teacher::where('id',$teacherId)->first();
                if ($token_key == $teacher->token_key) {
                    return $next($request);
                }
            }
        }else{        
            return redirect('/');            
        }
        
    }
}
