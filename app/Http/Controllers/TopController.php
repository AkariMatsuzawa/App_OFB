<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class TopController extends Controller
{
    //
    public function showTopPage()
    {
        return view ('toppage');
    }
}
