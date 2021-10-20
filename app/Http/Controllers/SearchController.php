<?php

namespace App\Http\Controllers;
//Studentモデルを使う宣言
use App\Student;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function showSearchPage()
    {
        //studentsテーブルからデータを全部取ってく。dd確認済み。
        $students = Student::all();
        return view ('searchpage', compact('students'));
    }

}
