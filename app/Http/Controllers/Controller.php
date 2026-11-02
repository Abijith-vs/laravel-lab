<?php

namespace App\Http\Controllers;

abstract class Controller
{
    return redirect()->route('students.index')->with('status', 'Student saved successfully!');

}
