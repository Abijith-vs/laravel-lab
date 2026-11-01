<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', ['students' => Student::all()]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'roll_no'    => 'required|string|unique:students,roll_no',
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:students,email',
            'department' => 'nullable|string|max:50',
            'semester'   => 'nullable|integer|min:1|max:8',
            'cgpa'       => 'nullable|numeric|min:0|max:10',
        ]);

        Student::create($data);

        return redirect()->route('students.index')->with('status', 'Student saved!');
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
            'roll_no'    => ['required', 'string', 'unique:students,roll_no,' . $student->id],
            'name'       => 'required|string|max:255',
            'email'      => ['required', 'email', 'unique:students,email,' . $student->id],
            'department' => 'nullable|string|max:50',
            'semester'   => 'nullable|integer|min:1|max:8',
            'cgpa'       => 'nullable|numeric|min:0|max:10',
        ]);

        $student->update($data);

        return redirect()->route('students.index')->with('status', 'Student updated!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('status', 'Student deleted!');
    }
}