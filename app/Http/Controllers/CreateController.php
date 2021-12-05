<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function showCreatePage()
    {
        return view ('createpage');
     
    }

    public function storeCreatePage(Request $request)
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

    // public function editCompletePage($id)
    // {
    //     // dd($id);
    //     $details= Company_details::find($id);
    //     // dd($details);
        
    //     $company = Auth::user();
    //     $company_detail = $company->company_details;

    //     return view ('completepage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,]);
    //     //これ動いてないのでは…？
     
    // }

    public function updateCreatePage(Request $request)
    {
        
        // dd($request);
        // "company_id" => "7"入ってる
        // $company = $request->all();
        //  dd($company);

        // $company = Company::find($company_id);
        $company_id = $request->company_id;
        dd($company_id);
        // "company_id" => "7"入ってる
        
    
        $company_detail = Company_details::find($company_id);
        dd($company_detail);
        
        $company = Auth::user();
        dd($company);

        $company -> name = $request -> name;
        $company_detail -> address = $request -> address;
        $company_detail -> place = $request -> place;
        $company_detail -> industry = $request -> industry;
        $company_detail -> type = $request -> type;
        $company_detail -> employees = $request -> employees;
        $company_detail -> manager = $request -> manager;
        $company -> save();
        $company_detail -> save();


        return view ('createpage',['company' => $company, 'company_detail' => $company_detail]);
    }
}