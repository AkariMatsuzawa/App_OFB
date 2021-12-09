<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class CompleteController extends Controller
{
    public function editCompletePage($company_id)
    {
        $details = Company_details::where('company_id', '=', Auth::id())
          ->get();

        
        $company = Auth::user();
        $company_detail = $company->company_details;

        return view ('completepage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,]);
     
    }
}
