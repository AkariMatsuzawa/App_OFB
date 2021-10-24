<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;

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
}
