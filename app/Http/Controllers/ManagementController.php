<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Offer;
use App\Company;
use App\Management_list;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    //

    public function showManagement_Page()
    {
        $student_id = Offer::where('company_id', '=', Auth::id())
          ->get(['student_id']);
        $students = Student::find($student_id);
      
         return view ('management_page',['students' => $students,]);
    
    }

}

