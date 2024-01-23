<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with('academic', 'country')->get();
        // return response()->json(['Student-Info' => $students]);
        return view('category.index',['students'=> $students]);
    }

    public function create()
    {
        return view('category.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|max:255|string',
            'age' =>'required|max:255|int',
            'address' =>'required|max:255|string',
            'academic.course' =>'required|max:255|string',
            'academic.year' =>'required|max:255|string',
            'country.continent' =>'required|max:255|string',
            'country.name' =>'required|max:255|string',
            'country.capital' =>'required|max:255|string'

        ]);

        $student = Student::create([
            'name' => $request['name'],
            'age' => $request['age'],
            'address' => $request['address'],
        ]);


        $academic = new Academic([
            'course' => $request['academic']['course'],
            'year' => $request['academic']['year'],
        ]);

        $student->academic()->save($academic);

        $country = new Country([
            'name' => $request['country']['name'],
            'continent' => $request['country']['continent'],
            'capital' => $request['country']['capital'],
        ]);

        $student->country()->save($country);


        return redirect('students/create')->with('status','Student Added.');
    }


    public function edit (int $id)
    {
        $student = Student::with(['academic', 'country'])->findOrFail($id);
        return view('category.edit', compact('student'));
    }

    public function update(Request $request, $id){
        // $student = Student::find($id);
        // $student -> update($request->all());
        // $student -> academic()->update($request->input('academic'));
        // $student -> country()->update($request->input('country'));
        // return response()->json(['student'=>$student]); 
        $validatedData = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'academic.course' => 'required|string',
            'academic.year' => 'required|string',
            'country.name' => 'required|string',
            'country.continent' => 'required|string',
            'country.capital' => 'required|string',
        ]);

        $student = Student::findOrFail($id);

        // Update student details
        $student->update([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
        ]);

        // Update associated academic record
        $academic = $student->academic;
        $academic->update([
            'course' => $validatedData['academic']['course'],
            'year' => $validatedData['academic']['year'],
        ]);

        // Update associated country record
        $country = $student->country;
        $country->update([
            'name' => $validatedData['country']['name'],
            'continent' => $validatedData['country']['continent'],
            'capital' => $validatedData['country']['capital'],
        ]);

        return redirect()->back()->with('status','Student Updated.');
    }

    public function destroy($id){
        // $student = Student::find($id);
        // $student -> country()->delete();
        // $student -> academic()->delete();
        // $student -> delete();
        // return response()->json(['message'=>'Successfully Deleted.']);
        $student = Student::findOrFail($id);

   
        $student->academic()->delete();
        $student->country()->delete();
        $student->delete();

        return redirect()->back()->with('status','Student Deleted.');
    }

    public function deleteCapital($id)
    {
        $student = Student::findOrFail($id);

        $country = $student->country;

        $country->update(['capital' => null]);

        return redirect()->back()->with('status', 'Capital Deleted.');  
    }

    
    public function deleteCountryName($id)
    {
        $student = Student::findOrFail($id);

        $country = $student->country;

        $country->update(['name' => null]);

        return redirect()->back()->with('status', 'Name Deleted.');  
    }

    public function deleteContinent($id)
    {
        $student = Student::findOrFail($id);

        $country = $student->country;

        $country->update(['continent' => null]);

        return redirect()->back()->with('status', 'Continent Deleted.');  
    }

    public function deleteYear($id)
    {
        $student = Student::findOrFail($id);

        $academic = $student->academic;

        $academic->update(['year' => null]);

        return redirect()->back()->with('status', 'Year Deleted.');  
    }

    public function deleteCourse($id)
    {
        $student = Student::findOrFail($id);

        $academic = $student->academic;

        $academic->update(['course' => null]);

        return redirect()->back()->with('status', 'Course Deleted.');  
    }

    public function deleteAddress($id)
    {
        $student = Student::findOrFail($id);

        $student;

        $student->update(['address' => null]);

        return redirect()->back()->with('status', 'Address Deleted.');  
    }

    public function deleteAge($id)
    {
        $student = Student::findOrFail($id);

        $student;

        $student->update(['age' => null]);

        return redirect()->back()->with('status', 'Age Deleted.');  
    }

    public function deleteName($id)
    {
        $student = Student::findOrFail($id);

        $student;

        $student->update(['name' => null]);

        return redirect()->back()->with('status', 'Name Deleted.');  
    }
}


