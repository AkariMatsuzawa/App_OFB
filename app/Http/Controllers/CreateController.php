<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;

class CreateController extends Controller
{

    public function showCreatePage()
    {
        $companies = Company::latest()->get();
        return view ('createage',['company' => $companies]);
    }

    
    public function storeCreatePage(Request $request)
    {
        $validator = $request->validate([
            'company' => ['required', 'string', 'max:100'],
        ]);

        Company::create([
            'company_id' => 1,
            'name' => $request->company,
        ]);

        Company_details::create([
            'address' => $request->company_detail,
            'phone' => $request->company_detail,
            'listing_classification' => $request->company_detail,
            'place' => $request->company_detail,
            'industry' => $request->company_detail,
            'type' => $request->company_detail,
            'employees' => $request->company_detail,
            'manager' => $request->company_detail,
            'logo' => $request->company_detail,
        ]);

        return back();
    }
}
