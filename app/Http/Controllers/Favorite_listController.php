<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Favorite;
use App\Company;
use Illuminate\Support\Facades\Auth;

class Favorite_listController extends Controller
{
    //
    public function showFavorite_listPage(Request $request)
    {

        $company = Auth::user()->company;

        $id = Favorite::all('student_id');
        $students = Student::find($id);
        // dd($id);
        // $max_id = Student::max('id');
        // $students = \App\Favorite::find($id);
        
        // $company = Auth::user();

        // $company = new Company();
        // $company->company_id = Auth::id();

        // $user = Auth::user();
        // $company = Auth::id();

       
        // for($id=1; $id<$max_id+1; $id++){
        //     $student = Offer::where('student_id',$id)->first();
            
            

        //  }        
         return view ('favorite_listpage',['company' => $company, 'students' => $students,]);
    
    }
}
