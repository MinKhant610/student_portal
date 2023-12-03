<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function find(){
        return view('grade.student_portal');
    }

    public function getResults(Request $request)
    {
        $name = $request->input('name');
        $roll = $request->input('roll');
        $year = $request->input('year');

        $student = Student::where('name', $name)
            ->where('roll', $roll)
            ->whereYear('enrollment_year', $year)
            ->first();

        if (!$student) {
            return redirect('/')->with('error', 'Student not found');
        }

        $results = $student->results;

        return view('student_results', ['results' => $results]);
    }
}
