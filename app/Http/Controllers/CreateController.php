<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{

    // public function showCreatePage()
    // {
    //     $companies = Company::latest()->get();
    //     return view ('createage',['company' => $companies]);
    // }

    
    // public function storeCreatePage(Request $request)
    // {
    //     $validator = $request->validate([
    //         'company' => ['required', 'string', 'max:100'],
    //     ]);

    //     Company::create([
    //         // 'company_id' => 1,
    //         // 'name' => $request->company,
    //         'name' => $user,
    //     ]);

    //     Company_details::create([
    //         'address' => $request->company_detail,
    //         'phone' => $request->company_detail,
    //         'listing_classification' => $request->company_detail,
    //         'place' => $request->company_detail,
    //         'industry' => $request->company_detail,
    //         'type' => $request->company_detail,
    //         'employees' => $request->company_detail,
    //         'manager' => $request->company_detail,
    //         'logo' => $request->company_detail,
    //     ]);

    //     return back();
    // }

    public function showCreatePage()
    {

        return view ('createpage');
     
    }

    public function storeCreatePage(Request $request)
    {
        $user = Auth::user();
        //Authは認証機能（Authorizeの略）

        Company::create([
            'name' => $user,
        ]);

        Company_details::create([
            'address' => $request->address,
            'listing_classification' => $request->listing_classification,
            'place' => $request->place,
            'industry' => $request->industry,
            'type' => $request->type,
            'employees' => $request->employees,
            'manager' => $request->manager,

        ]);
        return back ();
    }
}
