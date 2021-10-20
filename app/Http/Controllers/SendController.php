<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Offerモデルを使う宣言
use App\Offer;
//Authモデルを使う宣言
use Auth;


class SendController extends Controller
{
    //
    public function createSendPage()
    {
        $offers = Offer::latest()->get();
        return view ('sendpage', ['texts' => $offers]);
    }


    // 以下、viewファイルのフォームをPOST送信で送り、name属性の値に実際のテキストが入る。$requestがフォームの中身になる。
    //Requestは、ブラウザを通してユーザーから送られる情報を全て含んでいるオブジェクトのこと。$requestに引き継いでいる。（フォームで入力された値のこと）
    public function postText(Request $request){
        dd($request);

        // $requestに入っている値を、new postでデータベースに保存するという記述
        $post = new Post;
        //左辺：テーブル（カラム名）、右辺が送られてきた値（formから送られてきたnameが入っている）
        $post -> text = $request -> text;
        $post -> company_id = Auth::id();

        $post -> save();

        return redirect()->route('sendpage.create');




        Offer::create([
            'company_id' => 1,
            'text' => $request -> offers,
        ]);
    }
}
