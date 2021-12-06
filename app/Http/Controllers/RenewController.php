<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company_details;
use App\Company;
use Illuminate\Support\Facades\Auth;

class RenewController extends Controller
{
    //
    public function showRenewPage()
    {
        $details= Company_details::where('company_id', '=', Auth::id())
          ->get();
        //   dd($details);

        //   $company_id = $details -> company_id;

        $company = Auth::user();
        // $company = Company::where('id', '=', Auth::id())
        // ->get();
        // dd($company);
        $company_detail = $company->company_details;
        // dd($company_detail);
        $company_id = $company_detail->company_id;
        // dd($company_id);
        

        return view ('renewpage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,'company_id' => $company_id,]);
       
    }
}
