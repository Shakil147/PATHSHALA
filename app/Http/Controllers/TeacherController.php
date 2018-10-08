<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\TeacherContact;
use App\TeacherAcademic;
use App\Mail\ConfermEmail;
use Mail;
use Image;
use DB;

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
        $allTeacher= DB::table('teacher_academics')
        ->join('teachers', 'teacher_academics.teacher_id', '=', 'teachers.id')
        ->join('teacher_contacts', 'teacher_academics.teacher_id', '=', 'teacher_contacts.teacher_id')
        ->select('teacher_academics.*','teacher_contacts.*','teachers.first_name','teachers.last_name')
        ->where('highest_degree',1)
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
        $newTeacher->passeord     =   bcrypt('secret');
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
}
