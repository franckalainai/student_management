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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('classes', 'ClassesController');


Route::resource('classrooms', 'ClassroomController');

Route::resource('levels', 'LevelController');

Route::resource('batches', 'BatchController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('attendances', 'AttendanceController');

Route::resource('academics', 'AcademicController');

Route::resource('days', 'DayController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('transactions', 'TransactionController');

Route::resource('admisions', 'AdmisionController');

Route::resource('teachers', 'TeacherController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('semesters', 'semestersController');

Route::get('/dynamicLevel', ['as' => 'dynamicLevel', 'uses' => 'ClassSchedulingController@DynamicLevel']);

Route::get('/dynamicCourse', ['as' => 'dynamicCourse', 'uses' => 'LevelController@DynamicCourse']);


Route::resource('departments', 'DepartmentController');
