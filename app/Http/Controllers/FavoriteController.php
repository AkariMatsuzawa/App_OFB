<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //
    // public function showFavoritePage()
    // {
    //     return view ('favoritepage');
    // }



    public function store(Request $request)
    {
        $favorite = new Favorite();
        //新しいレコードを用意する。
        $favorite->student_id = $request->student_id;
        //$requestのstudent_idを$favoriteのstudent_idにしている。
        
        $favorite->company_id = Auth::id();
        //梱包作業（24行目〜27行目）ログイン企業をfavoriteのcompany_idにしている。
        $favorite->save();
        //発送、データベースに保存。

        return redirect(route('list.show',['id'=>$request->student_id,]));
    }
}
