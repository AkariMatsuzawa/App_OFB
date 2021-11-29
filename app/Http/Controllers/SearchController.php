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
            //where系のメソッドは連続して呼ぶとAND条件となる。OR条件を指定する場合はメソッド名の先頭にorを付与して、orWhereなどとなる。その使い方で合っているはず？
        })
        //↑クエリ関数
        ->withcount('offers')
        ->withcount('favorites')
        ->get();
            
            return view ('searchpage',['students' => $students]);
        //'student'は今ここで初めて定義してる。$がないけど変数扱い。
    }
}
