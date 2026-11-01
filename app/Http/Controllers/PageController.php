<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PageController extends Controller
{
    public function home()
    {
        $studentCount = Schema::hasTable('students') ? Student::count() : 0;

        return view('home', compact('studentCount'));
    }

    public function about()
    {
        return view('about');
    }
}
