<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with('academic', 'country')->get();
        return response()->json(['Student-Info' => $students]);
    }
    
    public function store(Request $request){
        $student = Student::create($request->all());
        $student -> academic()->create($request->input('academic'));
        $student -> country()->create($request->input('country'));
        return response()->json(['message'=>'Success!']);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student -> update($request->all());
        $student -> academic()->update($request->input('academic'));
        $student -> country()->update($request->input('country'));
        return response()->json(['student'=>$student]); 
    }

    public function destroy($id){
        $student = Student::find($id);
        $student -> country()->delete();
        $student -> academic()->delete();
        $student -> delete();
        return response()->json(['message'=>'Successfully Deleted.']);
    }
}
