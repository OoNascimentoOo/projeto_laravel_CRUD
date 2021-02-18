<?php

namespace App\Http\Controllers;
use App\Models\School;
use Redirect;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function index() {
        $schools = School::get();
        return view('schools.list', ['schools' => $schools]);
    }
    public function new() {
        return view('schools.form');
    }
    public function add(Request $request) {
        $school = new School;
        $school = $school->create($request->all());
        return Redirect::to('/schools'); 
    }
    public function edit($id) {
        $school = School::findOrFail($id);
        return view('schools.form', ['school' => $school]);
    }
    public function update($id, Request $request) {
        $school = School::findOrFail($id);
        $school->update($request->all());
        return Redirect::to('/schools'); 
    }
    public function delete( $id ){
        $school = School::findOrFail( $id );
        $school->delete();
        return Redirect::to('/schools');
    }
}
