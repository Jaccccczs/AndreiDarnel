<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
        ]);
        Student::create($data);
        return redirect()->route('students.index');
    }
    public function show(Student $student)
    {
        
        return view('students.show', compact('student'));
    }
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
        ]);
        $student->update($data);
        return redirect()->route('students.index');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
