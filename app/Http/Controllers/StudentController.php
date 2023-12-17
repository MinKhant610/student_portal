<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function find(){
        return view('grade.student_portal');
    }

    public function getResults(){
        $students = Student::latest()->filter([
            'name' => request('name'),
            'roll' => request('roll'),
            'year' => request('year'),
        ])->get();

        return view('grade.show_grade', [
            'students' => $students,
        ]);
    }
}
