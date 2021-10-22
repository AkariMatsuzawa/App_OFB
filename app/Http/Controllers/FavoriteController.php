<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;

class FavoriteController extends Controller
{
    //
    // public function showFavoritePage()
    // {
    //     return view ('favoritepage');
    // }

    public function store(Request $request)
    {
        dd($request->student_id);
        $favorite = new Favorite();
        $favorite->student_id = 1;
        $favorite->company_id = 1;
        $favorite->save();

        return redirect('/listpage');
    }
}
