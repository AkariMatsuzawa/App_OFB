<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function showSearchPage()
    {
        //studentsテーブルからデータを全部取ってくる
        // $students = Student::all();
        return view ('searchpage');
    }
}
