<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
        public function index(){

        $teachers = Teacher::all();

        return view('teacher.index', compact('teachers'));

    }

    public function create() {

        return view('teacher.create');

    }

    public function store(Request $request){

        $teacher = new Teacher();

        $teacher->name=$request->name;
         $teacher->email = $request->email;

        $teacher->save();

        return $teacher;

    }
}
