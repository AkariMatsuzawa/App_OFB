<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class CompleteController extends Controller
{
    //
    public function showCompletePage()
    {
        $details= Company_details::get();
        
        $company = Auth::user();
        $company_detail = $company->company_details;

        return view ('completepage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,]);

        // return view ('completepage');
     
    }

    public function editCompletePage($id)
    {
        $details= Company_details::find($id);
        
        $company = Auth::user();
        $company_detail = $company->company_details;

        return view ('completepage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,]);
     
    }

    public function updateCompletePage(Request $request)
    {
        Company_details::create([
            'address' => $request->address,
            'listing_classification' => $request->listing_classification,
            'place' => $request->place,
            'industry' => $request->industry,
            'type' => $request->type,
            'employees' => $request->employees,
            'manager' => $request->manager,
            'company_id' => Auth::user()->id,
            'name' => $request->name,

        ]);
        
        $company = Auth::user();
        $company_detail = $company->company_details;
        //$companyと$company_detailはcreateの前に置いてしまうと読まれない。

        return view ('createpage',['company' => $company, 'company_detail' => $company_detail]);
    }
}
