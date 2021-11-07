<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Auth使いますよって定型文。
use App\Offer;
use App\Student;
use App\Episode;
use App\Ambition;
use App\image;

class OfferController extends Controller
{
    //
    public function showOfferPage(Request $request, $id)
    //get送信で取ってきた$id、
    {
        // 現在認証しているユーザーを取得。Authがuserなのが定型。$userでも問題なし。Authクラスのuserメソッドを使うという意味。
        // $company = Auth::user();
        // dd($user);

        // 現在認証しているユーザーのIDを取得
        // $id = Auth::id();
        // dd($id);

        $student = Student::find($id);
        $episodes = $student->episodes;
        $ambitions = $student->ambitions;
  

     return view ('offerpage',['student' => $student, 'episodes' => $episodes,'ambitions' => $ambitions,]);
    }

   
}

