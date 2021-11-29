<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    //
    public function showSetupPage()
    {
        $details= Company_details::where('company_id', '=', Auth::id())
          ->get();
        //   dd($details);

        $details = true;
        if(!$details){
            return view ('setuppage');
        }
        else{
            return redirect('renewpage');
     }
       
        // return view ('setuppage',['details' => $details,]);
       
    }
}
