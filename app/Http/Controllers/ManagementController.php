<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    //
    public function showManagement_Page()
    {
        return view ('management_page');
    }
}