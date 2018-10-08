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

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function announcement()
    {
        return view('dashboard.admin.announcement.announcement');
    }
    public function addClass()
    {
        return view('dashboard.admin.class.addClass');
    }
    public function message()
    {
        return view('dashboard.admin.message.message');
    }
    public function teacherAttendence()
    {
        return view('dashboard.admin.report.teacherAttendenceRreport');
    }
    public function teacherMearkRreport()
    {
        return view('dashboard.admin.report.teacherMearkRreport');
    }
    public function createTimetable()
    {
        return view('dashboard.admin.timetable.createTimetable');
    }
    public function classTimetable()
    {
        return view('dashboard.admin.timetable.classTimetable');
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
