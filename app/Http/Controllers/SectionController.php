<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use DB;

class SectionController extends Controller
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

        $allSections = DB::table('sections')
        ->join('teachers', 'sections.section_teacher_id', '=', 'teachers.id')
        ->join('labels', 'sections.label_id', '=', 'labels.id')
        ->select('sections.*','teachers.first_name','teachers.last_name','labels.class_name','labels.class_code')->orderBy('labels.class_name', 'desc')->get();
        //return $allSections;

        return view('dashboard.admin.section.add-section',[
            'teachers'      =>$teachers,
            'allClasses'    =>$allClasses,
            'allSections'   =>$allSections
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
        $newLabel = new Section;
        $newLabel->section_name = $request->section_name;
        $newLabel->label_id = $request->label_id;
        $newLabel->section_teacher_id = $request->teacher_id;
        $newLabel->description = $request->description;
        $newLabel->publication_status = 1;
        $newLabel->save();

        notify()->flash('Section Added Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Section Added Successfully!',
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $labelById = Section::find($request->id);
        $labelById->section_name = $request->section_name;
        $labelById->label_id = $request->label_id;
        $labelById->section_teacher_id = $request->teacher_id;
        $labelById->description = $request->description;
        $labelById->save();

        notify()->flash('Section Updated Successfully!', 'success', [
            'timer' => 6000,
            'text' => 'Section Updated Successfully!',
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
