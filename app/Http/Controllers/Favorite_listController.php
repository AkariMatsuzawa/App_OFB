<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Favorite;

class Favorite_listController extends Controller
{
    //
    public function showFavorite_listPage()
    {
        $id = Favorite::all('student_id');
        $students = Student::find($id);
        // dd($id);
        // $max_id = Student::max('id');
        // $students = \App\Favorite::find($id);
        // dd($students);

        

           
       
        // for($id=1; $id<$max_id+1; $id++){
        //     $student = Offer::where('student_id',$id)->first();
            
            

        //  }        
         return view ('favorite_listpage',['students' => $students,]);
    
    }
}
