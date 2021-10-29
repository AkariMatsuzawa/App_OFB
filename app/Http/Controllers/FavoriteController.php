<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Student;
use App\Company;
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
        dd($request->student_id);
        $favorite = new Favorite();
        $favorite->student_id = 1;
        $favorite->company_id = 1;
        $favorite->save();

        return redirect('offerpage');
    }
    public function showFavoritepage(Request $request)
    {
        $id = Auth::id();

        Favorite::create([
            'company_id' => 1,
            'student_id' => 1,

        ]);
        return view ('offerpage');
    }
}
