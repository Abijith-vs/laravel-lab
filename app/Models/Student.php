<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * MODEL — one row of the "students" table.
 *
 * Laravel's Eloquent ORM guesses the table name from the class name:
 * Student  ->  students. You never write SELECT by hand:
 *     Student::all()          SELECT * FROM students
 *     Student::find(3)        SELECT * FROM students WHERE id = 3
 *     Student::create([...])  INSERT INTO students ...
 */
class Student extends Model
{
    // Columns that may be filled from a form with Student::create($request->...)
    protected $fillable = ['roll_no', 'name', 'email', 'department', 'semester', 'cgpa'];
}
