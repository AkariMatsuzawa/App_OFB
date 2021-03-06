<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function showSetupPage()
    {
        $details = Company_details::where('company_id', '=', Auth::id())
        ->exists();
            if($details){
                return redirect('renewpage');
            }
            else{
                return view ('setuppage');
        }
       
    }
}
