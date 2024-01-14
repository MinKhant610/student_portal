<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function all(){
        return view('dashboard.dashboard', [
            'students' => Student::oldest()
            ->filter(request(['name']))
            ->paginate(6)
        ]);
    }

    public function create(){
        return view('dashboard.create');
    }

    public function store(){
        $formData = request()->validate([
            "name" => ["required"],
            "roll" => ["required"],
            "year" => ["required"],
            "sub1" => ["required"],
            "sub2" => ["required"],
            "sub3" => ["required"],
            "sub4" => ["required"],
            "sub4" => ["required"],
            "sub5" => ["required"],
            "sub6" => ["required"],
            "sub7" => ["required"],
        ]);
        Student::create($formData);
        return redirect('/dashboard');
    }

    public function destroy(Student $student){
        $student->delete();
        return back();
    }

    public function check(Student $student){
        return view('dashboard.check', [
            'student' => $student
        ]);
    }

    public function edit(Student $student){
        return view('dashboard.edit', [
            'student' => $student
        ]);
    }

    public function update(Student $student){
        $formData = request()->validate([
            "name" => ["required"],
            "roll" => ["required"],
            "year" => ["required"],
            "sub1" => ["required"],
            "sub2" => ["required"],
            "sub3" => ["required"],
            "sub4" => ["required"],
            "sub4" => ["required"],
            "sub5" => ["required"],
            "sub6" => ["required"],
            "sub7" => ["required"],
        ]);
        $student->update($formData);
        return redirect('/dashboard');
    }
}
