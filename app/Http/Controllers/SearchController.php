<?php

namespace App\Http\Controllers;
//Studentモデルを使う宣言
use App\Student;
use App\Episode;
use App\Ambition;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function storeSearchPage(Request $request)
    {
        //viewから送られてくきたものが$requestの中に入ってきている
        // dd($request);
        // studentsテーブルからデータを全部取ってく。dd確認済み。
        // $students = Student::all();
        // return view ('searchpage', compact('students'));
        // 検索条件を仮置きtoppageから送られてきたものが入るようにする。
    $gender = '男性';
    $industry = '';
    $work = '企画・マーケティング';
    $univercity_group = '日東駒専クラス';
    $place = '';
    // studentテーブルのレコード数を確認,IDカラムの最大値を取ってくる
    $max_id = Student::max('id');

    //配列を新しく定義、array();で空の配列を作る
    $student_narrows=array();
    // 最大レコード数まで繰り返し処理
    for($id=1; $id<$max_id+1; $id++){
    // studentを一つずつ取り出し、studentテーブルのidカラムを目印に、レコードを取り出す。（スプシのフィルター機能と同じ）繰り返し1回目だと1になる。
    $student = Student::where('id',$id)->first();
    // studentの子リレーションにあたるambitionを取りだし（志望系も取ってこようね）。student_idは親になる。
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
    // 検索し該当する場合は配列に追加（検索しましょう！）
        if(
            $array['work']==$work &&
            $array['gender']==$gender &&
            $array['univercity_group']==$univercity_group
            // ※他の検索項目も同様に作る 論理積&&を忘れないように
            ){
                array_push($student_narrows,$student);
            };
            //array_pushは電車に乗れる切符を持ってる状態。（）の中が乗るための電車を置いておこうね。1つ目のものに2つ目のものを入れますよって書き方。
    }
    
    // dd($student_narrows);

        return view ('searchpage',['students' => $student_narrows]);
        //'student'は今ここで初めて定義してる。$がないけど変数扱い。searchpageのURLに$student_narrowsを送る。（'student'を定義しないといけないというルールになってる）
    }

//     public function index(Request $request)
// {
//     $univercity = $request->input("univercity");
    
//     $query = Student::query();
    
//     大学名で検索する
//     $query->when($univercity, function($query, $univercity) { 
//         return $query->where('univercity', "LIKE", "%$univercity%"); 
//     });
    
//     return $query->get();

    
// }
}
