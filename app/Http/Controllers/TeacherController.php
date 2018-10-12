<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Teacher;
use App\TeacherContact;
use App\TeacherAcademic;
use App\TeacherLogInfo;
use App\Mail\ConfermEmail;
use Mail;
use Image;
use DB;
use Session;

class TeacherController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.teacher.home.teacherDashboard');
    }

    public function login(Request $request)
    {
        $teacher = Teacher::where('email', $request->email)->first();
        //$teacher = Teacher::where('email','neoma.murray@example.org')->first();
        //return $teacher;
        if(isset($teacher)) {
            $cheak = password_verify($request->password, $teacher->password);
            if($cheak) {

                $teacherName = $teacher->first_name.' '.$teacher->last_name;

                //$ip = TeacherLogInfo::get_ip();
                $ip = $_SERVER['REMOTE_ADDR'];
                $os = TeacherLogInfo::get_os();
                $browser = TeacherLogInfo::get_browser();
                $device = TeacherLogInfo::get_device();

                $newTokenKey = new TeacherLogInfo;
                $newTokenKey->teacher_id = $teacher->id;
                $newTokenKey->ip = $ip;
                $newTokenKey->os = $os;
                $newTokenKey->browser = $browser;
                $newTokenKey->device = $device;
                $token_key = Str::random(32);
                $newTokenKey->token_key = $token_key;
                $newTokenKey->save();

                Session::put('teacher_token_id',  $newTokenKey->id);
                Session::put('teacherId', $teacher->id);
                Session::put('teacherName',  $teacherName);
                Session::put('teacherPhoto',  $teacher->avator);
                Session::put('teacher_token_key',  $token_key);

                notify()->flash('Welcome back!'.$teacherName, 'success', [
                    'timer' => 5000,
                    'text' => 'It\'s really great to see you again',
                ]);

                return redirect('/teacher-home');
            } else {

               notify()->flash('Email or Passeord is incorrect', 'warning', [
                    'timer' => 3000,
                    'text' => 'It\'s really great to see you again',
                ]);
               return back();
            }
        } 
        else { 
            notify()->flash('Email or Passeord is incorrect', 'warning', [
                    'timer' => 3000,
                    'text' => 'It\'s really great to see you again',
                ]);
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $division = DB::table('divisions')->select('divisions.*')->get();
        return view('dashboard.admin.teacher.addTeacher',['divisions'=> $division]);
    }
    public function teacherList()
    {   
        /*$allTeacher= DB::table('teacher_academics')
        ->join('teachers', 'teacher_academics.teacher_id', '=', 'teachers.id')
        ->join('teacher_contacts', 'teacher_academics.teacher_id', '=', 'teacher_contacts.teacher_id')
        ->select('teacher_academics.*','teacher_contacts.*','teachers.first_name','teachers.last_name')
        ->where('highest_degree',1)
        ->get();*/

        $allTeacher= DB::table('teachers')
        ->join('teacher_academics', 'teacher_academics.teacher_id', '=', 'teachers.id')
        ->join('teacher_contacts', 'teachers.id', '=', 'teacher_contacts.teacher_id')
        ->select('teachers.id','teachers.email','teachers.phone','teachers.first_name','teachers.last_name','teacher_academics.*')
        ->where('teacher_academics.highest_degree',1)
        ->get();
        //return $allTeacher;
        return view('dashboard.admin.teacher.teacherList',['allTeacher'=>$allTeacher]);
    }

    public function velidation($request){

        $this->validate($request, [
            'first_name'  => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u|different:email',
            'last_name'   => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u|different:email',
            'nid'         => 'required',
            'birth_date'  => 'required',            
            'gender'      => 'required',            
            'email'       => 'required|email|unique:teachers,email',
            'phone'       => 'required|regex:/(01)[0-9]{9}/|min:11|max:15|unique:teachers,phone',
            'alt_phone'   => 'required|regex:/(01)[0-9]{9}/|min:11|max:15|unique:teachers,phone',
            'religion'    => 'required',
            'avator'      => 'required',
            'p_zip'       => 'required',
            'p_division'  => 'required',
            'p_zilla'     => 'required',
            'p_up_zilla'  => 'required',
            'p_country'   => 'required',
            'p_address_1' => 'required|max:30', 
            'p_address_2' => 'required|max:30',
            'address_1'   => 'required|max:30',
            'address_2'   => 'required|max:30',
            'zip'         => 'required',
            'division'    => 'required',
            'zilla'       => 'required',
            'up_zilla'    => 'required',
            'country'     => 'required',
            'h_degree'    => 'required',
            'h_university'=> 'required',
            'h_passing_year' => 'required',
            'h_cgpa'      => 'required',
            'degree'      => 'required',
            'university'  => 'required',
            'passing_year'=> 'required',
            'cgpa'        => 'required',
        ]);
    }

    protected function storeImage($avator){

        $imageName = 'teacher_'.'_'.time().'_'.$avator->getClientOriginalName();
        $directory = 'scource/image/avator/';
        $save = Image::make($avator)->resize(600, 600)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }

    public function storeTeacherBasic($request){
        $avator = $request->file('avator');
        if (isset($avator)) {
            $imageUrl= $this->storeImage($avator);
        }
        $newTeacher = new Teacher;
        $newTeacher->first_name   =  $request->first_name;
        $newTeacher->last_name    =  $request->last_name;
        $newTeacher->user_name    =  $request->user_name;
        $newTeacher->nid          =  $request->nid;
        $newTeacher->gender       =  $request->gender;
        $newTeacher->dob          =  $request->birth_date;
        $newTeacher->phone        =  $request->phone;
        $newTeacher->email        =  $request->email;
        $newTeacher->password     =   bcrypt('secret');
        $newTeacher->religion     =  $request->religion;
        $newTeacher->avator       =   $imageUrl;
        $newTeacher->status       =   0;
        $newTeacher->save();
        return $newTeacher;
    }

    public function storeTeacherContact($request, $newteacher){
        $teacherContact = new TeacherContact;
        $teacherContact->teacher_id =$newteacher->id;
        $teacherContact->p_country =$request->p_country;
        $teacherContact->p_division_id =$request->p_division;
        $teacherContact->p_districts_id =$request->p_zilla;
        $teacherContact->p_upzilla_id =$request->p_up_zilla;
        $teacherContact->p_zip =$request->p_zip;
        $teacherContact->p_address_1 =$request->p_address_1;
        $teacherContact->p_address_2 =$request->p_address_2;

        $teacherContact->address_1 =$request->address_1;
        $teacherContact->address_2 =$request->address_2;
        $teacherContact->country =$request->country;
        $teacherContact->division_id =$request->division;
        $teacherContact->districts_id =$request->zilla;
        $teacherContact->upzilla_id =$request->up_zilla;
        $teacherContact->zip =$request->zip;
        
        $teacherContact->phone =$request->phone;
        $teacherContact->alt_phone =$request->alt_phone;
        $teacherContact->email =$request->email;
        $teacherContact->save();
        return $teacherContact;
    }
    public function storeTeacherAcademic($request, $newteacher)
    {
        $teacherAcademic = new TeacherAcademic;
        $teacherAcademic->teacher_id      =$newteacher->id;
        $teacherAcademic->highest_degree  = 1;
        $teacherAcademic->degree          =$request->h_degree;
        $teacherAcademic->university         =$request->h_university;
        $teacherAcademic->passing_year    =$request->h_passing_year;
        $teacherAcademic->cgpa            =$request->h_cgpa;
        $teacherAcademic->save();

        $teacherAcademicOther = new TeacherAcademic;
        $teacherAcademicOther->teacher_id   = $newteacher->id;
        $teacherAcademicOther->degree       = $request->degree;
        $teacherAcademicOther->university      = $request->university;
        $teacherAcademicOther->passing_year = $request->passing_year;
        $teacherAcademicOther->cgpa         = $request->cgpa;
        $teacherAcademicOther->save();
        return $teacherAcademicOther;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->velidation($request);
        $newTeacher = $this->storeTeacherBasic($request);
        $this->storeTeacherContact($request, $newTeacher);
        $this->storeTeacherAcademic($request, $newTeacher);
        Mail::to($newTeacher->email)->send(new ConfermEmail($newTeacher));

        notify()->flash('Teacher Info Saved successFulli!', 'success', [
            'timer' => 3000,
            'text' => 'Teacher Added successFulli!',
        ]);

        return back()->with('message','Teacher Info Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downlodAssignment()
    {
        return view('dashboard.teacher.assignment.downlod-assignment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function createAssignment()
    {
        return view('dashboard.teacher.assignment.create-assignment');
    }

    public function viewAttendence()
    {
        return view('dashboard.teacher.attendence.view-student-attendence');
    }

    public function markAttendence()
    {
        return view('dashboard.teacher.attendence.mark-student-attendence');
    }

    public function message()
    {
        return view('dashboard.teacher.message.message');
    }

    public function addMarks()
    {
        return view('dashboard.teacher/marks/add-student-marks');
    }

    public function viewMarks()
    {
        return view('dashboard.teacher/marks/view-student-marks');
    }

    public function timetable()
    {
        return view('dashboard.teacher/timetable/timetable');
    }

    public function attendenceReport()
    {
        return view('dashboard.teacher/report/attendence-report');
    }

    public function marksReport()
    {
        return view('dashboard.teacher/report/marks-report');
    }
    public function logout(Request $request){
        $teacherId = Session::get('teacherId');
        $token_id = Session::get('teacher_token_id');

        $token = TeacherLogInfo::where('id',$token_id)
                        ->where('teacher_id',$teacherId)->first();
        $token->delete();
        
        Session::forget('teacher_token_id');
        Session::forget('teacherId');
        Session::forget('teacherName');
        Session::forget('teacherPhoto');
        Session::forget('teacher_token_key');
        return redirect('/');
    }
    public function s()
    {
       //return Session::get('teacher_token_id');
      //return Session::get('teacherId');
      // return Session::get('teacherName');
      // return Session::get('teacherPhoto');
       return Session::get('teacher_token_key');
    }
}
