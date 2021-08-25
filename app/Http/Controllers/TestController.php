<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class TestController extends Controller
{

    // Create a student
    public function create(Request $request) {
        $student = new Student();
        $student->lname = $request->input('lname');
        $student->fname = $request->input('fname');
        $student->age = $request->input('age');
        $student->hobby = $request->input('hobby');

        if(!$student->lname || !$student->fname || !$student->age || !$student->hobby){
            return response('Error, Please check the fields', 422);
        } else {
            $student->save();
            return response()->json($student);
        }

        
    }
    // Get Student By ID
    public function getStudentByID(Request $request, $id) {
        $student = Student::where('id', $id)->get(['id','lname','fname','age','hobby']);
        return response()->json($student);
    }

    public function listStudents(Request $request) {
        $students = Student::all();
        return response()->json($students);
    }

    public function updateStudent(Request $request, $id) {
        $student = Student::find($id);

        if($request->input('lname')) {
            $student->lname = $request->input('lname'); 
        }

        if($request->input('fname')) {
            $student->fname = $request->input('fname'); 
        }

        if($request->input('age')) {
            $student->age = $request->input('age'); 
        }

        if($request->input('hobby')) {
            $student->hobby = $request->input('hobby'); 
        }
        

        $student->save();
        return response()->json($student);
    }

    public function deleteStudent(Request $request, $id) {
        $student = Student::find($id)->delete();
        return response()->json($student);
    }
}
