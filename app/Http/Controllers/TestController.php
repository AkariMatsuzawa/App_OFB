<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class TestController extends Controller
{
    
    public function editTestPage()
    {
        return view ('testpage');

    }


}