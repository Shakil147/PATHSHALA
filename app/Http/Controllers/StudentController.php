<?php

namespace App\Http\Controllers;

use App\Student;
use App\StudentGuardian;
use App\StudentContact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use DB;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.about.about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions  = DB::table('divisions')->select('divisions.*')->get();
        $labels  = DB::table('labels')->select('labels.*')->get();
        $registration  = DB::table('students')->select('students.registration')->orderBy('created_at', 'desc')->first();
        
        //return[ $registration];
        return view('dashboard.admin.student.admin-add-student',[
            'divisions'=>$divisions,
            'labels'=>$labels,
            'registration'=>$registration
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //return $request;
        $this->velidation($request);
        $newStudent = $this->storeStudentBasic($request);
        $this->storeStudentContact($request, $newStudent);
        $this->storeStudentGuardian($request, $newStudent);
        //Mail::to($newStudent->email)->send(new ConfermEmail($newStudent));
        notify()->flash('Student Added Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Student Added Successfully!',
        ]);
        return back()->with('message','Teacher Info Saved');
    }

    public function velidation($request){
        $this->validate($request, [
            'first_name'  => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u|different:email',
            'last_name'   => 'required|min:3|max:30|regex:/^[\pL\s\-]+$/u|different:email',
            'nid'         => 'required',
            'birth_date'  => 'required',            
            'gender'      => 'required',            
            'email'       => 'required|email|unique:students,email',
            'phone'       => 'required|regex:/(01)[0-9]{9}/|min:11|max:15|unique:students,phone',
            'religion'    => 'required',
            //'registration'    => 'required|unique:students,registration',
            'roll'    => 'required|unique:students,roll',
            'group'    => 'required',
            'label_id'    => 'required',
            'section_id'    => 'required',
            'last_school'    => 'required',
            'Last_standerd'    => 'required',
            'last_marks'    => 'required',
            'sports'    => 'required',
            'avator'      => 'required',
            'father_name'      => 'required',
            'mother_name'      => 'required',
            'occupation'      => 'required',
            'guardians_nid'      => 'required',
            'gurdians_phone'      => 'required',
            'gurdians_phone_alt'      => 'required',
            'gurdians_email'      => 'required',
            'gurdians_religion'      => 'required',
            'father_photo'      => 'required',
            'mother_photo'      => 'required',
            'nationality'      => 'required',
            'zip'         => 'required',
            'division_id'    => 'required',
            'districts_id'       => 'required',
            'upzilla_id'    => 'required',
            'country'     => 'required',
            'address_1'   => 'required|max:30',
            'address_2'   => 'required|max:30',
        ]);
    }

    protected function storeImage($avator){

        $imageName = 'student_'.'_'.time().'_'.$avator->getClientOriginalName();
        $directory = 'scource/image/avator/';
        $save = Image::make($avator)->resize(600, 600)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }

    public function storeStudentBasic($request){   
        $avator = $request->file('avator');
        if (isset($avator)) {
            $imageUrl= $this->storeImage($avator);
        }
        $registration  = DB::table('students')->select('students.registration')->orderBy('created_at', 'desc')->first();
        $newStudent = new Student;
        $newStudent->first_name = $request->first_name;
        $newStudent->last_name = $request->last_name;
        $newStudent->user_name = $request->user_name;
        $newStudent->nid = $request->nid;
        $newStudent->dob = $request->birth_date;
        $newStudent->gender = $request->gender;
        $newStudent->phone = $request->phone;
        $newStudent->email = $request->email;
        $newStudent->religion = $request->religion;
        $newStudent->passeord = bcrypt('secret');
        $newStudent->avator = $imageUrl;
        $newStudent->registration = $registration->registration+1;
        $newStudent->label_id = $request->label_id;
        $newStudent->section_id = $request->section_id;
        $newStudent->roll = $request->roll;
        $newStudent->group = $request->group;
        $newStudent->last_school = $request->last_school;
        $newStudent->Last_standerd = $request->Last_standerd;
        $newStudent->last_marks = $request->last_marks;
        $newStudent->sports = $request->sports;
        $newStudent->status = 1;
        $newStudent->save();
        return $newStudent;
    }

    public function storeguardianPhoto($avator)
    {
         $imageName = 'guardian_'.'_'.time().'_'.$avator->getClientOriginalName();
        $directory = 'scource/image/avator/';
        $save = Image::make($avator)->resize(600, 600)->save($directory.$imageName);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }

    public function storeStudentGuardian($request, $newStudent){
        $father_photo = $request->file('father_photo');
        if (isset($father_photo)) {
            $fatherImageUrl= $this->storeguardianPhoto($father_photo);
        }
        $mother_photo = $request->file('mother_photo');
        if (isset($mother_photo)) {
            $motherImageUrl= $this->storeguardianPhoto($mother_photo);
        }

        $studentGuardian = new StudentGuardian;
        $studentGuardian->student_id = $newStudent->id;
        $studentGuardian->father_name = $request->father_name;
        $studentGuardian->mother_name = $request->mother_name;
        $studentGuardian->occupation = $request->occupation;
        $studentGuardian->guardians_nid = $request->guardians_nid;
        $studentGuardian->gurdians_phone = $request->gurdians_phone;
        $studentGuardian->gurdians_phone_alt = $request->gurdians_phone_alt;
        $studentGuardian->gurdians_email = $request->gurdians_email;
        $studentGuardian->father_photo = $fatherImageUrl;
        $studentGuardian->mother_photo = $motherImageUrl;
        $studentGuardian->gurdians_religion = $request->gurdians_religion;
        $studentGuardian->nationality = $request->nationality;
        $studentGuardian->save();
        return $studentGuardian;
    }

    public function storeStudentContact($request, $newStudent){      

        $studentContact = new StudentContact;
        $studentContact->student_id     = $newStudent->id;
        $studentContact->phone          = $newStudent->phone;
        $studentContact->email          = $newStudent->email;
        $studentContact->country        = $request->country;
        $studentContact->division_id    = $request->division_id;
        $studentContact->districts_id   = $request->districts_id;
        $studentContact->upzilla_id     = $request->upzilla_id;
        $studentContact->zip            = $request->zip;
        $studentContact->address_1      = $request->address_1;
        $studentContact->address_2      = $request->address_2;
        $studentContact->save();
        return $studentContact;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student){     

        $allStudentS= DB::table('students')
        ->join('labels', 'students.label_id', '=', 'labels.id')
        ->join('sections','students.section_id','=','sections.id')
        ->select('students.id','students.first_name','students.last_name','students.registration','students.roll','students.email','students.phone','students.label_id','students.section_id','labels.class_name','sections.section_name')->get(); 

        $divisions  = DB::table('divisions')->select('divisions.*')->get();
        $labels  = DB::table('labels')->select('labels.*')->get();

        return view('dashboard.admin.student.studentList',[
            'allStudentS'=>$allStudentS,
            'divisions'=>$divisions,
            'labels'=>$divisions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function login(Request $request)
    {
        $student = Student::where('email', $request->email)->first();
        if(isset($student)) {
            $cheak = password_verify($request->password, $student->password);
            if($cheak) {
                $studentName = $student->first_name.' '.$student->last_name;
                $token_key = Str::random(32);
                $student->token_key = $token_key;
                $student->save();
                
                Session::put('studentId', $student->id);
                Session::put('studentName',  $studentName);
                Session::put('studentPhoto',  $student->avator);
                Session::put('student_token_key',  $token_key);

                notify()->flash('Welcome back!'.$studentName, 'success', [
                    'timer' => 5000,
                    'text' => 'It\'s really great to see you again',
                ]);
                return redirect('/student-home');
            }
        }else { 
            notify()->flash('Email or Passeord is incorrect', 'warning', [
                    'timer' => 3000,
                    'text' => 'It\'s really great to see you again',
                ]);
            return back();
        }
        
    }

    public function logout(Request $request)
    {
        
        $studentId = Session::get('studentId');
        $student = Student::where('id',$studentId)->first();
        $student->token_key= '';
        $student->save();
        Session::forget('studentId');
        Session::forget('studentName');
        Session::forget('studentPhoto');
        Session::forget('student_token_key');
        return redirect('/');
    }

    public function home()
    {
        return view('dashboard.student.home.student-dashboard');
    }
}
