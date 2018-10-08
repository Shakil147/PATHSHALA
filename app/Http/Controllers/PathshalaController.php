<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class PathshalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home.home');
    }

    public function about()
    {
        return view('frontend.about.about');
    }
    public function academic()
    {
        return view('frontend.academic.academic');
    }
    public function academicArts()
    {
        return view('frontend.academic.academicArts');
    }
    public function academicAthletics()
    {
        return view('frontend.academic.academicAthletics');
    }
    public function academicCalendar()
    {
        return view('frontend.academic.academicCalendar');
    }
    public function academicCurriculum()
    {
        return view('frontend.academic.academicCurriculum');
    }
    public function admission()
    {
        return view('frontend.admission.admission');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }
    public function curriculum()
    {
        return view('frontend.curriculum.curriculum');
    }
    public function eventSingle()
    {
        return view('frontend.events.event-single');
    }
    public function events()
    {
        return view('frontend.events.events');
    }
    public function gallery()
    {
        return view('frontend.gallery.gallery');
    }
    public function preschool()
    {
        return view('frontend.preschool.preschool');
    }
    public function preschoolSummerCamp()
    {
        return view('frontend.preschool.preschoolSummerCamp');
    }
    public function getDistricts(Request $request){
        $data= DB::table('districts')
        ->select('districts.*')
        ->orderBy('districts.zilla_name')
        ->where('division_id',$request->id)
        ->get();
        return response()->json($data);
    }
    public function getUpazilas(Request $request){
        $data= DB::table('upazilas')
        ->select('upazilas.*')
        ->orderBy('upazilas.up_zilla_name')
        ->where('district_id',$request->id)
        ->get();
        return response()->json($data);
    }
    public function getSections(Request $request){
        $data= DB::table('sections')
        ->select('sections.*')
        ->orderBy('sections.section_name')
        ->where('label_id',$request->id)
        ->get();
        return response()->json($data);
    }
    public function getSubjects(Request $request){
        
        $data= DB::table('subjects')
        ->select('subjects.*')
        ->orderBy('subjects.subject_name')
        ->where('label_id',$request->id)
        ->get();
        return response()->json($data);
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
        //
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
}
