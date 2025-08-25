<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Teacher;

class FacultyTeacherController extends Controller
{

    public function index()
    {
        $faculties= Faculty::with('teachers')->get();
        return view('facultyTeacher.index', compact('faculties'));
    }
}
