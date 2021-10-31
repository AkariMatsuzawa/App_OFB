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
        return view ('setuppage');
        // $companies = Company::latest()->get();
        // return view ('setuppage',['company' => $companies]);
    }

    // public function updateSetupPage(Request $request)
    // {
    //     $validator = $request->varidate([
    //         'company' => ['required', 'string', 'max:100'],
    //     ]);

    //     Company::create([
    //         'company_id' => 1,
    //         'company' => $request->company,
    //     ]);

    //     return back();
    // }

    // public function storeSetupPage(Request $request)
    // {
    //     $user = Auth::user();
    //     //Authは認証機能（Authorizeの略）

    //     Company::create([
    //         'name' => $user,
    //     ]);

    //     Company_details::create([
    //         'address' => $request->address,
    //         'listing_classification' => $request->listing_classification,
    //         'place' => $request->place,
    //         'industry' => $request->industry,
    //         'type' => $request->type,
    //         'employees' => $request->employees,
    //         'manager' => $request->manager,

    //     ]);
    //     return back ();
    // }
}
