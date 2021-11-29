<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class RenewController extends Controller
{
    //
    public function showRenewPage()
    {
        $details= Company_details::where('company_id', '=', Auth::id())
          ->get();
        //   dd($details);

        $company = Auth::user();
        $company_detail = $company->company_details;
        //$companyと$company_detailはcreateの前に置いてしまうと読まれない。

        return view ('renewpage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,]);
       
    }
}
