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
    public function showFavorite_listPage()
    {

        // $company = Auth::user()->id;

        // $id = Favorite::all('student_id');
        // $students = Student::find($id);

        $student_id = Favorite::where('company_id', '=', Auth::id())
        //   ->where('student_id', '=', Student::id())
          ->get(['student_id']);
         //favoriteのテーブルをログインユーザーidで絞り込む。他のログインユーザーのデータは出なくなる。

        $students = Student::find($student_id);
        // dd($students);

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
         return view ('favorite_listpage',['students' => $students,]);
    
    }
}
