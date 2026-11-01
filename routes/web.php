<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

// A
Route::get('/', [PageController::class, 'home']);
Route::get('/hello/{name}', fn ($name) => "Hello, $name");
Route::get('/about', [PageController::class, 'about']);

// B
Route::resource('students', StudentController::class);

// C (explicit binding)
Route::get('/roll/{student_roll}', fn (Student $student_roll) =>
    view('students.show', ['student' => $student_roll]));

// E
Route::get('/api/students', fn () => response()->json(Student::all()));