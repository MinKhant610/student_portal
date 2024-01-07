<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function all(){
        return view('dashboard', [
            'students' => Student::latest()
            ->filter(request(['name']))
            ->paginate(6)
        ]);
    }
}
