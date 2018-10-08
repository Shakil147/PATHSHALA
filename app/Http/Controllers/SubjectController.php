<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Paper;
use Illuminate\Http\Request;
use DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = DB::table('teachers')->select('teachers.id','teachers.first_name','teachers.last_name')->get();

        $allClasses = DB::table('labels')
        ->join('teachers', 'labels.teacher_id', '=', 'teachers.id')
        ->select('labels.*','teachers.first_name','teachers.last_name')->get();

        $allSubjects = DB::table('subjects')
        ->join('teachers', 'subjects.subject_teacher_id', '=', 'teachers.id')
        ->join('labels', 'subjects.label_id', '=', 'labels.id')
        ->select('subjects.*','labels.class_name','labels.class_code','teachers.first_name','teachers.last_name')->get();

        return view('dashboard.admin.subject.addSubject',[
            'teachers'=>$teachers,
            'allClasses'=>$allClasses,
            'allSubjects'=>$allSubjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateSubject($request);
        $newSubject  = new Subject;
        $newSubject->subject_name = $request->subject_name;
        $newSubject->subject_code = $request->subject_code;
        $newSubject->label_id = $request->label_id;
        $newSubject->subject_teacher_id = $request->teacher_id;
        $newSubject->description = $request->description;
        $newSubject->group = $request->group;
        $newSubject->type = $request->type;
        $newSubject->publication_status = 1;
        $newSubject->save();

        $this->defoltPaper($newSubject);
        notify()->flash('Subject Added Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Subject Added Successfully!',
        ]);

        return back();
    }
//@if($subject->id == $paper->subject_id)selected @endif
    public function defoltPaper($request)
    {
        $newPaper = new Paper;
        $newPaper->paper_name = $request->subject_name;
        $newPaper->paper_code = $request->subject_code;
        $newPaper->subject_id = $request->id;
        $newPaper->label_id = $request->label_id;
        $newPaper->paper_teacher_id = $request->subject_teacher_id;
        $newPaper->description = $request->description;
        $newPaper->publication_status = 1;
        $newPaper->save();

    }

    public function validateSubject($request)
    {
        $this->validate($request, [
            'subject_name'   => 'required',
            'subject_code'    => 'required',
            'label_id'    => 'required',
            'teacher_id'      => 'required',
            'description'      => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validateSubjectUpdate($request);
        $subjectByIId = Subject::find($request->id);
        $subjectByIId->subject_name = $request->subject_name;
        $subjectByIId->subject_code = $request->subject_code;
        $subjectByIId->label_id = $request->label_id;
        $subjectByIId->group = $request->group;
        $subjectByIId->type = $request->type;
        $subjectByIId->subject_teacher_id = $request->teacher_id;
        $subjectByIId->description = $request->description;
        //$subjectByIId->publication_status = $request->publication_status;
        $subjectByIId->save();

        notify()->flash('Subject Updated Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Subject Updated Successfully!',
        ]);

        return back();
    }

    public function validateSubjectUpdate($request)
    {
        $this->validate($request, [
            'id'   => 'required',
            'subject_name'   => 'required',
            'subject_code'    => 'required',
            'group'    => 'required',
            'label_id'    => 'required',
            'type'    => 'required',
            'teacher_id'      => 'required',
            'description'      => 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
