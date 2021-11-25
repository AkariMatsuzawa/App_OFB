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
        $student_id = Favorite::where('company_id', '=', Auth::id())
          ->get(['student_id']);
         //favoriteのテーブルをログインユーザーidで絞り込む。他のログインユーザーのデータは出なくなる。

        $students = Student::find($student_id);
       
        return view ('favorite_listpage',['students' => $students,]);
    
    }
}
