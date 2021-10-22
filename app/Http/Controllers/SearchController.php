<?php

namespace App\Http\Controllers;
//Studentモデルを使う宣言
use App\Student;
use App\Episode;
use App\Ambition;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function showSearchPage()
    {
        // studentsテーブルからデータを全部取ってく。dd確認済み。
        $students = Student::all();
        return view ('searchpage', compact('students'));

      
    }

    public function index(Request $request)
{
    $univercity = $request->input("univercity");
    
    $query = Student::query();
    
    // 大学名で検索する
    $query->when($univercity, function($query, $univercity) { 
        return $query->where('univercity', "LIKE", "%$univercity%"); 
    });
    
    return $query->get();
    
}
}
