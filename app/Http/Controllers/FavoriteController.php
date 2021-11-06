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
        // dd($request->student_id);
        $favorite = new Favorite();
        $favorite->student_id = $request->student_id;
        // $favorite->company_id = Auth::user()->id;
        $favorite->company_id = Auth::id();
        $favorite->save();
        //createメソッドでも作れる

        // return redirect('/listpage/{favorite_id}');
        return redirect(route('list.show',['id'=>$request->student_id,]));
        //ただのlistpageじゃなくて学生idが必要なはず？
    }
    // public function showFavoritepage(Request $request)
    // {
    //     $id = Auth::id();

    //     Favorite::create([
    //         'company_id' => 1,
    //         'student_id' => 1,

    //     ]);
    //     return view ('offerpage');
    // }
}
