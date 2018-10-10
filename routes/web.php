<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PathshalaController@index');
Route::get('/about', 'PathshalaController@about');

Route::get('/academic', 'PathshalaController@academic');
Route::get('/academicArts', 'PathshalaController@academicArts');
Route::get('/academicAthletics', 'PathshalaController@academicAthletics');
Route::get('/academicCalendar', 'PathshalaController@academicCalendar');
Route::get('/academicCurriculum', 'PathshalaController@academicCurriculum');

Route::get('/admission', 'PathshalaController@admission');
Route::get('/contact', 'PathshalaController@contact');
Route::get('/curriculum', 'PathshalaController@curriculum');
Route::get('/eventSingle', 'PathshalaController@eventSingle');
Route::get('/events', 'PathshalaController@events');
Route::get('/gallery', 'PathshalaController@gallery');
Route::get('/preschoolSummerCamp', 'PathshalaController@preschoolSummerCamp');
Route::get('/preschool', 'PathshalaController@preschool');
Route::get('/districts', 'PathshalaController@getDistricts');
Route::get('/Upazilas', 'PathshalaController@getUpazilas');
Route::get('/sections', 'PathshalaController@getSections');
Route::get('/subjects', 'PathshalaController@getSubjects');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/class', 'LabelController@index');
Route::post('/add-class', 'LabelController@create')->name('class.add');
Route::post('/update-class', 'LabelController@update')->name('class.update');

Route::get('/section', 'SectionController@index');
Route::post('/add-section', 'SectionController@store')->name('section.add');
Route::post('/update-section', 'SectionController@update')->name('section.update');

Route::get('/subject', 'SubjectController@index');
Route::post('/add-subject', 'SubjectController@store')->name('subject.add');
Route::post('/update-subject', 'SubjectController@update')->name('subject.update');

Route::get('/paper', 'PaperController@index');
Route::post('/add-paper', 'PaperController@store')->name('paper.add');
Route::post('/update-paper', 'PaperController@update')->name('paper.update');

Route::get('/message', 'AdminController@message');
Route::get('/announcement', 'AdminController@announcement');
Route::get('/teacher-attendence-report', 'AdminController@teacherAttendence');
Route::get('/teacher-marks-report', 'AdminController@teacherMearkRreport');

Route::get('/add-student', 'StudentController@create');
Route::post('/save-student', 'StudentController@store')->name('student.add');
Route::get('/student-list', 'StudentController@show');

Route::get('/add-teacher', 'TeacherController@create');
Route::post('/save-teacher', 'TeacherController@store')->name('teacher.add');
Route::get('/teacher-list', 'TeacherController@teacherList');
Route::get('/create-timetable', 'AdminController@createTimetable');
Route::get('/class-timetable', 'AdminController@classTimetable');
});




Route::group(['middleware' => ['CheckTeacher']], function () {
    
	Route::get('/teacher-home', 'TeacherController@index');
	Route::get('/create-assignment', 'TeacherController@createAssignment');
	Route::get('/assignment-download', 'TeacherController@downlodAssignment');
	Route::get('/mark-student-attendence', 'TeacherController@markAttendence');
	Route::get('/view-student-attendence', 'TeacherController@viewAttendence');
	Route::get('/t-timetable', 'TeacherController@timetable');
	Route::get('/teacher-message', 'TeacherController@message');
	Route::get('/add-marks', 'TeacherController@addMarks');
	Route::get('/view-student-marks', 'TeacherController@viewMarks');
	Route::get('/attendence-report', 'TeacherController@attendenceReport');
	Route::get('/t-marks-report', 'TeacherController@marksReport');
});

Route::post('/teacher-login', 'TeacherController@login')->name('teacher.login');
Route::post('/teacherLogout', 'TeacherController@logout')->name('teacherLogout');


Route::post('/student-login', 'StudentController@login')->name('student.login');
Route::post('/studentLogout', 'StudentController@logout')->name('studentLogout');

Route::group(['middleware' => ['CheckStusent']], function () {
    
	Route::get('/student-home', 'StudentController@home');
	Route::get('/assignment-download', 'StudentController@assignmentDownload');
	Route::get('/assignment-upload', 'StudentController@assignmentUpload');
	Route::get('/student-attendence', 'StudentController@studentAttendence');
	Route::get('/attendence-detailed', 'StudentController@attendenceDetailed');
	Route::get('/view-student-attendence', 'StudentController@viewAttendence');
	Route::get('/student-message', 'StudentController@message');
	Route::get('/student-marks', 'StudentController@studentMarks');
	Route::get('/view-student-marks', 'StudentController@viewMarks');
	Route::get('/student-timetable', 'StudentController@timetable');
	Route::get('/student-exam-plan', 'StudentController@examPlan');
	Route::get('/student-exam-schedule', 'StudentController@examSchedule');
	Route::get('/student-fees', 'StudentController@fees');

});
Route::get('/s', 'TeacherController@s');