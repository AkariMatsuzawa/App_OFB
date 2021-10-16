<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Favorite_listController extends Controller
{
    //
    public function showFavorite_listPage()
    {
        return view ('favorite_listpage');
    }
}
