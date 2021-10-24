<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Offerモデルを使う宣言
use App\Offer;
use App\Student;
use App\Company;


class SendController extends Controller
{
    //
    public function storeSendPage()
    {
        $offers = Offer::latest()->get();
        return view ('sendpage', ['texts' => $offers]);

        
    }


    // 以下、viewファイルのフォームをPOST送信で送り、name属性の値に実際のテキストが入る。$requestがフォームの中身になる。
    //Requestは、ブラウザを通してユーザーから送られる情報を全て含んでいるオブジェクトのこと。$requestに引き継いでいる。（フォームで入力された値のこと）
    public function postOffer(Request $request)
    {
        $validator = $request->validate([
            'text' => ['required', 'string', 'max:800'],
        ]);

        Offer::create([
            'company_id' => Auth::user()->id,
            'student_id' => 1,
            'text' => $request -> offer,
        ]);

        return  back();
    }
}
