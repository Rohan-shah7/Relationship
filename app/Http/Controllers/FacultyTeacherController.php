<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Teacher;

class FacultyTeacherController extends Controller
{
    public function index()
    {
        $faculties = Faculty::with('teachers')->get();
        return view('facultyTeacher.index', compact('faculties'));
    }

    public function create()
    {
        $faculties = Faculty::all();
        $teachers = Teacher::all();
        return view('facultyTeacher.create', compact('faculties', 'teachers'));
    }

    public function store(Request $request)
    {
        $faculty = Faculty::findOrFail($request->faculty_id);
        $teacher = Teacher::findOrFail($request->teacher_id);

        $faculty->teachers()->attach($teacher->id);

        return redirect()->route('facultyTeacher.index')
            ->with('success', 'Teacher assigned to faculty successfully');
    }
}
