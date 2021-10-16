<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    //
    public function showSendPage()
    {
        return view ('sendpage');
    }
}
