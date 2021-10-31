<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Episode;
use App\Ambition;
use App\image;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Builder\Stub;

class ListController extends Controller
{
    //
    public function showListPage(Request $request)
    {
        Student::create([
            'student_id' => 1,
            'name' => $request['name'],
            'email' => $request['email'],
            // 'password' => Hash::make($request['password']),
        ]);
        
// studentテーブルのレコード数を確認,IDカラムの最大値を取ってくる
$max_id = Student::max('id');
// dd($max_id);

//配列を新しく定義、array();で空の配列を作る
$student_narrows=array();
// 最大レコード数まで繰り返し処理
for($id=1; $id<$max_id+1; $id++){
// studentを一つずつ取り出し、studentテーブルのidカラムを目印に、レコードを取り出す。（スプシのフィルター機能と同じ）繰り返し1回目だと1になる。
$student = Student::where('id',$id)->first();
// studentの子リレーションにあたるambitionを取りだし（志望系も取ってこようね）。student_idは親になる。
$ambition = Ambition::where('student_id',$id)->first();
$episode = Episode::where('student/id',$id)->first();

// 必要検索項目を配列化
$array = array(
    'student_id'=>$student['id'],
    'faculty'=>$student['faculty'],
    'subject'=>$student['subject'],
    'gender'=>$student['gender'],
    'reserch_content'=>$episode['reserch_content'],
    'future_image'=>$episode['future_image'],
    'text1'=>$episode['text1'],
    'text2'=>$episode['text2'],
    'text3'=>$episode['text3'],
    'type'=>$ambition['type'],
    'industry'=>$ambition['industry'],
    'work'=>$ambition['work'],
);
        {
            array_push($student_narrows,$student);
        };
        //array_pushは電車に乗れる切符を持ってる状態。（）の中が乗るための電車を置いておこうね。1つ目のものに2つ目のものを入れますよって書き方。
}

// dd($student_narrows);

    return view ('listpage',['students' => $student_narrows]);
    //'student'は今ここで初めて定義してる。$がないけど変数扱い。searchpageのURLに$student_narrowsを送る。（'student'を定義しないといけないというルールになってる）
}
}

