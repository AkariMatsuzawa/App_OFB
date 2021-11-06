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
        $id = Offer::all('student_id');
        $students = Student::find($id);
        // dd($students);
        // dd($id);
        // $max_id = Student::max('id');
        // $students = \App\Offer::find($id);
        // dd($students);

        

           
       
        // for($id=1; $id<$max_id+1; $id++){
        //     $student = Offer::where('student_id',$id)->first();
            
            

        //  }        
         return view ('management_page',['students' => $students,]);
    
    }

}

