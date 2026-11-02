<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

// A
Route::get('/', [PageController::class, 'home']);
Route::get('/hello/{name}', fn ($name) => view('hello', ['name' => $name]));
Route::get('/about', [PageController::class, 'about']);

// B
Route::resource('students', StudentController::class);

// C (explicit binding, defined in AppServiceProvider)
Route::get('/roll/{roll}', fn (Student $roll) =>
    view('students.show', ['student' => $roll]));

// E
Route::get('/api/students', fn () => response()->json(Student::all()));