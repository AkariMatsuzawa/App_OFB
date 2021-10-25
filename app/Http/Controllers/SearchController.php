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
        // $students = Student::all();
        // return view ('searchpage', compact('students'));
        return view ('searchpage');

      
    }

    public function index(Request $request)
{
    // $univercity = $request->input("univercity");
    
    // $query = Student::query();
    
    // 大学名で検索する
    // $query->when($univercity, function($query, $univercity) { 
    //     return $query->where('univercity', "LIKE", "%$univercity%"); 
    // });
    
    // return $query->get();

    // 検索条件を仮置きtoppageから送られてきたものが入るようにする。
    $gender = '男性';
    $work = '企画・マーケティング';
    // studentテーブルのレコード数を確認
    $max_id = Student::max('id');

    $array_narrows=array();
    // 最大レコード数まで繰り返し処理
    for($id=1; $id<$max_id+1; $id++){
    // studentを一つずつ取り出し
    $student = Student::where('id',$id)->first();
    // studentの子リレーションにあたるambitionを取りだし
    $ambition = Ambition::where('student_id',$id)->first();
    // 必要検索項目を配列化
    $array = array(
        'student_id'=>$student['id'],
        'gender'=>$student['gender'],
        'univercity_group'=>$student['univercity_group'],
        'industry'=>$ambition['industry'],
        'work'=>$ambition['work'],
        'place'=>$ambition['place'],
        'type'=>$ambition['type'],
    );
    // 検索し該当する場合は配列に追加
        if(
            $array['work']==$work &&
            $array['gender']==$gender
            // ※他の検索項目も同様に作る 論理積&&を忘れないように
            ){
                array_push($array_narrows,$array['student_id']);
            };
    }
    $student_narrows = Student::find($array_narrows);
    // ＄student_narrowsをviewファイルに渡して一覧表示させてあげれば検索一覧ができると思います。
    dd($student_narrows);
    // 仮置きの検索条件を変えながらdd();で内容の確認をお願い致します。
    
}
}
