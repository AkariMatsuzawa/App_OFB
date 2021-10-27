<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Auth使いますよって定型文。
use App\Offer;

class OfferController extends Controller
{
    //
    public function showOfferPage()
    {
        // 現在認証しているユーザーを取得。Authがuserなのが定型。$userでも問題なし。Authクラスのuserメソッドを使うという意味。
        $company = Auth::user();
        // dd($user);

        // 現在認証しているユーザーのIDを取得
        $id = Auth::id();
        // dd($id);
       
return view ('offerpage');
    }

   
}

