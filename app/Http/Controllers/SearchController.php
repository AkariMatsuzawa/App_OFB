<?php

namespace App\Http\Controllers;
//Studentモデルを使う宣言
use App\Student;
use App\Episode;
use App\Ambition;
use App\Offer;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function storeSearchPage(Request $request)
    {
        
        $students = Student::where('gender', $request->gender)
        ->where('univercity_group', $request->univercity_group)
        ->whereHas('ambitions', function($query)use($request){
            $query
            ->where('industry', $request->industry)
            ->where('work', $request->work)
            ->where('place', $request->place);
        })
        //↑クエリ関数
        ->withcount('offers')
        ->withcount('favorites')
        ->get();
            
            return view ('searchpage',['students' => $students]);
        //'student'は今ここで初めて定義してる。$がないけど変数扱い。searchpageのURLに$student_narrowsを送る。（'student'を定義しないといけないというルールになってる）
    }
}
