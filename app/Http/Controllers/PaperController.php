<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use DB;

class PaperController extends Controller
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

        $allPapers = DB::table('papers')
        ->join('teachers', 'papers.paper_teacher_id', '=', 'teachers.id')
        ->join('labels', 'papers.label_id', '=', 'labels.id')
        ->join('subjects', 'papers.subject_id', '=', 'subjects.id')
        ->select('papers.*','subjects.subject_name','subjects.subject_code','labels.class_name','labels.class_code','teachers.first_name','teachers.last_name')
        ->get();
       /* $allPapers = DB::table('papers')
        ->join('teachers', 'papers.paper_teacher_id', '=', 'teachers.id')
        ->join('labels', 'papers.label_id', '=', 'labels.id')
        ->select('papers.*')->get();*/

        return view('dashboard.admin.paper.add-paper',[
            'teachers'=>$teachers,
            'allClasses'=>$allClasses,
            'allSubjects'=>$allSubjects,
            'allPapers'=>$allPapers
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
        $this->validatePaper($request);
        $newPaper = new Paper;
        $newPaper->paper_name = $request->paper_name;
        $newPaper->paper_code = $request->paper_code;
        $newPaper->subject_id = $request->subject_id;
        $newPaper->label_id = $request->label_id;
        $newPaper->paper_teacher_id = $request->teacher_id;
        $newPaper->description = $request->description;
        $newPaper->publication_status = 1;
        $newPaper->save();

        notify()->flash('Paper Added Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Paper Added Successfully!',
        ]);

        return back();
    }
    public function validatePaper($request)
    {
        $this->validate($request, [
            'paper_name'   => 'required',
            'paper_code'    => 'required',
            'subject_id'    => 'required',
            'label_id'    => 'required',
            'teacher_id'      => 'required',
            'description'      => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function show(Paper $paper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function edit(Paper $paper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validatePaperUpdate($request);
        $paperById = Paper::find($request->id);
        $paperById->paper_name = $request->paper_name;
        $paperById->paper_code = $request->paper_code;
        $paperById->subject_id = $request->subject_id;
        $paperById->label_id = $request->label_id;
        $paperById->paper_teacher_id = $request->teacher_id;
        $paperById->description = $request->description;
        //$paperById->publication_status =$request->publication_status;
        $paperById->save();

        notify()->flash('Paper Update Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Paper Update Successfully!',
        ]);
        return back();
    }
    public function validatePaperUpdate($request)
    {
        $this->validate($request, [
            'id'   => 'required',
            'paper_name'   => 'required',
            'paper_code'    => 'required',
            'subject_id'    => 'required',
            'label_id'    => 'required',
            'teacher_id'      => 'required',
            'description'      => 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper)
    {
        //
    }
}
