<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;
use App\Section;
use DB;

class LabelController extends Controller
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
        return view('dashboard.admin.class.addClass',['teachers'=>$teachers,'allClasses'=>$allClasses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	$this->validateLabel($request);
    	$newLavel = new Label;
    	$newLavel->class_name =$request->class_name;
    	$newLavel->class_code =$request->class_code;
    	$newLavel->teacher_id =$request->teacher_id;
        $newLavel->description =$request->description;
    	$newLavel->publication_status = 1;
    	$newLavel->save();
        $this->defoltSection($newLavel);

        notify()->flash('Class Aded Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Class Aded Successfully!',
        ]);
        return back();
    }

    public function defoltSection($request)
    {
        $newLabel = new Section;
        $newLabel->section_name = $request->class_code.'A';
        $newLabel->label_id = $request->id;
        $newLabel->section_teacher_id = $request->teacher_id;
        $newLabel->description = $request->description;
        $newLabel->publication_status = 1;
        $newLabel->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function validateLabel($request)
    {
        $this->validate($request, [
            'class_code'   => 'unique:labels,class_code',
            'class_name'    => 'required',
            'teacher_id'      => 'required',
            'description'      => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
    	//return $request;
    	$this->validate($request, [
            'id'      		=> 'required',
            'class_name'   	=> 'required',
            'class_code'   	=> 'required',
            'teacher_id'   	=> 'required',
            'description'  	=> 'required'
        ]);
        $lavelById = Label::find($request->id);
    	$lavelById->class_name =$request->class_name;
    	$lavelById->class_code =$request->class_code;
    	$lavelById->teacher_id =$request->teacher_id;
    	$lavelById->description =$request->description;
    	$lavelById->save();
        
        notify()->flash('Class Updated Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Class Updated Successfully!',
        ]);

    	return back();
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
}
