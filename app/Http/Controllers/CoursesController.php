<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Redirect;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::get();
        return view('courses.list', ['courses' => $courses]);
    }
    public function new() {
        return view('courses.form');
    }
    public function add(Request $request) {
        $course = new Course;
        $course = $course->create($request->all());
        return Redirect::to('/courses');
    }
    public function edit($id) {
        $course = Course::findOrFail($id);
        return view('courses.form', ['course' => $course]);
    }
    public function update($id, Request $request) {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return Redirect::to('/courses');
    }
    public function delete( $id ){
        $course = Course::findOrFail( $id );
        $course->delete();
        return Redirect::to('/courses');
    }
}
